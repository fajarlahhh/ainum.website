<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;

class TarifKhususDetail extends Model
{
    //
    protected $table = 'pelayanan.tarif_khusus_detail';
    public $incrementing = false;
    protected $primaryKey = ['min_pakai', 'tarif_khusus_id'];
}
