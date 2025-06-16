<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pelayanan\JenisPengaduan;
use App\Models\Pelayanan\RegistrasiPelayananOnline;
use Livewire\Attributes\Url;
use MatanYadaev\EloquentSpatial\Objects\Point;
use App\Traits\MapTrait;

class Pengaduan extends Component
{
    use MapTrait;

    #[Url]
    public $nomor;

    public $data;
    public $nama, $alamat, $no_hp, $id_pelanggan, $dataJenisPengaduan, $isi_pengaduan, $jenis_pengaduan_id, $form = "pengaduan";

    public function cekRegistrasi(?string $pelangganId, ?string $jenisPengaduanId = null): bool
    {
        if (!$pelangganId) {
            return false;
        }

        if ($jenisPengaduanId == null) {
            return false;
        }

        return RegistrasiPelayananOnline::where('pelanggan_id', $pelangganId)
            ->when($jenisPengaduanId, fn($q) => $q->where('jenis_pengaduan_id', $jenisPengaduanId))
            ->whereDoesntHave('beritaAcaraPelayanan')
            ->whereNull('tanggal_batal')
            ->exists();
    }

    public function submitPengaduan()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required|string|min:20',
            'no_hp' => 'required|digits_between:9,13|numeric|regex:/^08[1-9][0-9]{7,10}$/',
            'isi_pengaduan' => 'required|min:20',
            'jenis_pengaduan_id' => 'required',
            'id_pelanggan' => 'nullable|exists:App\Models\Pelayanan\Pelanggan,id',
        ]);
        $dataTerakhir = RegistrasiPelayananOnline::where('created_at', 'ilike', date('Y-m-') . '%')
            ->whereNotNull('jenis_pengaduan_id')
            ->orderBy('id', 'desc')
            ->first();
        if ($dataTerakhir) {
            $nomor = sprintf('%05s', (int) substr($dataTerakhir->nomor, 0, 5) + 1) . "/PENGADUAN/PBL/ONLINE/" . date('m/Y');
        } else {
            $nomor = "00001/PENGADUAN/PBL/ONLINE/" . date('m/Y');
        }

        $data = new RegistrasiPelayananOnline();
        $data->nomor = $nomor;
        $data->nama = $this->nama;
        $data->alamat = $this->alamat;
        $data->no_hp = $this->no_hp;
        $data->pelanggan_id = $this->id_pelanggan;
        $data->jenis_pengaduan_id = $this->jenis_pengaduan_id;
        $data->catatan = $this->isi_pengaduan;
        $data->koordinat = new Point($this->latitude, $this->longitude);
        $data->save();

        $this->form = "tracking";
        $this->nomor = $nomor;
        session()->flash('success', 'Data pengaduan berhasil disimpan');
    }

    public function submitTracking()
    {
        $this->validate([
            'nomor' => 'required|exists:App\Models\Pelayanan\RegistrasiPelayananOnline,nomor',
        ]);

        $this->form = "result";
        $this->data = RegistrasiPelayananOnline::where('nomor', $this->nomor)->first();
    }

    public function tracking()
    {
        $this->form = "tracking";
        $this->reset(['nama', 'alamat', 'no_hp', 'id_pelanggan', 'dataJenisPengaduan', 'isi_pengaduan', 'jenis_pengaduan_id']);
    }

    public function pengaduan()
    {
        $this->reset(['nama', 'alamat', 'no_hp', 'id_pelanggan', 'dataJenisPengaduan', 'isi_pengaduan', 'jenis_pengaduan_id']);
        $this->form = "pengaduan";
    }

    public function mount()
    {
        if ($this->nomor) {
            $this->form = "tracking";
            $this->submitTracking();
        } else {
            $this->form = "pengaduan";
        }
        $this->dataJenisPengaduan = JenisPengaduan::orderBy('id', 'asc')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.pengaduan');
    }
}
