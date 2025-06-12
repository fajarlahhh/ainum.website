<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Models\BacaMeter;
use App\Models\Pelayanan\RekeningAir;
use App\Models\Pelayanan\TarifKhusus;
use App\Traits\PengaturanTrait;
use App\Models\Pelayanan\TarifRekeningAir;
use App\Models\Pelayanan\PelangganTarifKhusus;
use App\Models\Pelayanan\TarifDanaMeterAdministrasi;

trait RekeningairTrait
{
    use PengaturanTrait;
    //
    public $dataPelangganTarifKhusus, $dataTarifKhusus, $dataTarifKhususDetail, $dataTarifRekeningAir, $dataTarifDanaMeterAdministrasi;

    public function bootRekeningairTrait()
    {
        $this->dataPelangganTarifKhusus = PelangganTarifKhusus::all()->toArray();
        $this->dataTarifKhusus = TarifKhusus::where('aktif', true)->get()->toArray();
        $this->dataTarifKhususDetail = TarifKhusus::with('tarifKhususDetail')->where('aktif', true)->get()->toArray();
        $this->dataTarifRekeningAir = TarifRekeningAir::with('tarifRekeningAirDetail')->orderBy('tanggal_berlaku', 'desc')->get()->toArray();
        $this->dataTarifDanaMeterAdministrasi = TarifDanaMeterAdministrasi::orderBy('tanggal_berlaku', 'desc')->first()->toArray();
    }

    public function pakai($row): int
    {
        return $row['stand_pasang'] > 0 || $row['stand_angkat'] > 0 ? ($row['stand_ini'] - $row['stand_pasang']) + ($row['stand_angkat'] - $row['stand_lalu']) : $row['stand_ini'] - $row['stand_lalu'];
    }

    public function administrasi($tarif_khusus_id): int
    {
        if ($tarif_khusus_id) {
            $tarifKhusus = collect($this->dataTarifKhusus)->where('id', $tarif_khusus_id)->first();
            if ($tarifKhusus['subsidi_dana_meter_administrasi']) {
                return 0;
            } else {
                return $this->dataTarifDanaMeterAdministrasi['administrasi'];
            }
        } else {
            return $this->dataTarifDanaMeterAdministrasi['administrasi'];
        }
    }

    public function subsidiDenda($tarif_khusus_id): bool
    {
        if ($tarif_khusus_id) {
            $tarifKhusus = collect($this->dataTarifKhusus)->where('id', $tarif_khusus_id)->first();
            return $tarifKhusus['subsidi_denda'];
        } else {
            return false;
        }
    }

    public function subsidiAdministrasi($tarif_khusus_id): bool
    {
        if ($tarif_khusus_id) {
            $tarifKhusus = collect($this->dataTarifKhusus)->where('id', $tarif_khusus_id)->first();
            return $tarifKhusus['subsidi_dana_meter_administrasi'];
        } else {
            return false;
        }
    }

    public function danameter($tarif_khusus_id): int
    {
        if ($tarif_khusus_id) {
            $tarifKhusus = collect($this->dataTarifKhusus)->where('id', $tarif_khusus_id)->first();
            if ($tarifKhusus['subsidi_dana_meter_administrasi']) {
                return 0;
            } else {
                return $this->dataTarifDanaMeterAdministrasi['dana_meter'];
            }
        } else {
            return $this->dataTarifDanaMeterAdministrasi['dana_meter'];
        }
    }

    public function hargaAir($golongan_id, $pakai, $status_pelanggan, $tarif_rekening_air_id, $tarif_khusus_id): int
    {
        $hargaAir = 0;
        $sisa = $m3 = $pakai;

        $tarifKhusus = null;
        $dataTarifRekeningAir = collect($this->dataTarifRekeningAir)->where('id', $tarif_rekening_air_id)->first()['tarif_rekening_air_detail'];

        if ($tarif_khusus_id) {
            $tarifKhusus = collect($this->dataTarifKhususDetail)->where('id', $tarif_khusus_id)->first();
            if ($tarifKhusus) {
                if (count($tarifKhusus['tarif_khusus_detail']) > 0) {
                    $tarifProgresif = collect($tarifKhusus['tarif_khusus_detail'])->values()->all();
                } else {
                    $tarifProgresif = collect($dataTarifRekeningAir)->where('golongan_id', $golongan_id)->values()->all();
                }
            } else {
                $tarifProgresif = collect($dataTarifRekeningAir)->where('golongan_id', $golongan_id)->values()->all();
            }
        } else {
            $tarifProgresif = collect($dataTarifRekeningAir)->where('golongan_id', $golongan_id)->values()->all();
        }

        if ($tarifProgresif) {
            if ($pakai <= 10) {
                $hargaAir = 10 * $tarifProgresif[0]['nilai'];
            } else {
                $hargaAirProgresif = [];
                foreach ($tarifProgresif as $key => $tarif) {
                    $minPakai = $tarif['min_pakai'];
                    $maxPakai = $tarif['max_pakai'] ?: PHP_INT_MAX;
                    $nilai = $tarif['nilai'];

                    if ($key == 0) {
                        $dif = $maxPakai - ($minPakai == 0 ? 0 : ($minPakai));
                    } else {
                        $dif = $maxPakai - ($minPakai == 0 ? 0 : ($minPakai - 1));
                    }

                    $hargaAirProgresif[] = ($m3 < $maxPakai ? $sisa * $nilai : $dif * $nilai);

                    $sisa = (($m3 - $maxPakai) >= 0 ? $m3 - $maxPakai : 0);
                }
                $hargaAir = collect($hargaAirProgresif)->sum();
            }
        }

        return $hargaAir;
    }

    public function getRekeningAir($pelanggan, $orderBy = 'asc', $tanggalBayar = null)
    {
        return RekeningAir::withTrashed()->with(['pelanggan.tarifKhusus', 'pembayaran', 'tarifKhusus', 'tarifRekeningAir', 'mutasiKoreksiRekeningAir', 'drd'])
            ->whereIn('pelanggan_id', $pelanggan)->orderBy('periode', $orderBy)->get()->map(function ($q) use ($tanggalBayar) {
                $periode = new Carbon($q->periode);
                $denda = ($periode->addMonths(1)->day((int)$this->tanggalMaxBayar)->format('Ymd') < ($tanggalBayar ? date('Ym' . $tanggalBayar) : date('Ymd')) ? ($q->harga_air > 0 ? (int)$this->dendaRekeningAir : 0) : 0);
                return [
                    'id' => $q->id,
                    'koreksi' => $q->mutasiKoreksiRekeningAir,
                    'drd' => $q->drd,
                    'status_pelanggan' => $q->drd?->status_pelanggan->name,
                    'status_pelanggan_raw' => $q->drd?->status_pelanggan->value,
                    'pelanggan_id' => $q->pelanggan_id,
                    'pelanggan_nama' => $q->pelanggan->nama,
                    'pelanggan_alamat' => $q->pelanggan->alamat,
                    'pakai' => $q->pakai,
                    'periode' => $q->periode,
                    'golongan_id' => $q->golongan_id,
                    'tarif_khusus_id' => $q->tarif_khusus_id,
                    'tarif_rekening_air_id' => $q->tarif_rekening_air_id,
                    'tarifKhusus' => $q->tarifKhusus,
                    'tarifRekeningAir' => $q->tarifRekeningAir,
                    'angsuran_rekening_air_id' => $q->angsuran_rekening_air_id,
                    'stand_ini' => $q->stand_ini,
                    'stand_lalu' => $q->stand_lalu,
                    'stand_pasang' => $q->stand_pasang,
                    'stand_angkat' => $q->stand_angkat,
                    'pakai' => $q->pakai,
                    'subsidi_denda' => $q->subsidi_denda,
                    'subsidi_dana_meter_administrasi' => $q->subsidi_dana_meter_administrasi,
                    'harga_air' => $q->harga_air,
                    'catatan' => $q->catatan,
                    'dana_meter' => $q->dana_meter,
                    'administrasi' => $q->administrasi,
                    'terbayar' => $q->terbayar == true && $q->pembayaran ? true : false,
                    'pembayaran' => $q->pembayaran,
                    'denda' => $q->terbayar ? $q->denda : ($q->subsidi_denda ? 0 : $denda),
                    'tagihan' => $q->harga_air + ($q->dana_meter) +
                        + ($q->administrasi),
                    'cabang_id' => $q->cabang_id,
                    'update' => false
                ];
            });
    }
}
