<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;

class PelangganTarifKhusus extends Model
{
    //
    protected $table = 'pelayanan.pelanggan_tarif_khusus';
    public $incrementing = false;
    protected $primaryKey =['tarif_khusus_id', 'pelanggan_id'];
}
