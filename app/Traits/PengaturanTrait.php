<?php

namespace App\Traits;

use App\Models\Pelayanan\Pengaturan;

trait PengaturanTrait
{
    //
    public $dendaRekeningAir = 0, $tanggalMaxBayar = 20;
    private $dataPengaturan;

    public function bootPengaturanTrait()
    {
        $dataPengaturan = Pengaturan::all();
        $this->dendaRekeningAir = $dataPengaturan->where('id', 'Biaya Denda Rekening Air')->first()?->nilai;
        $this->tanggalMaxBayar = $dataPengaturan->where('id', 'Tanggal Max Rekening Air')->first()?->nilai;
    }
}
