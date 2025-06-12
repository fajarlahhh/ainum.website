<?php

namespace App\Models\Pelayanan;

use App\Models\Aset\Aset;
use Illuminate\Database\Eloquent\Model;

class PaketSrDetail extends Model
{
    //
    protected $table = 'pelayanan.paket_sr_detail';
    public $incrementing = false;
    protected $primaryKey = ['aset_id', 'qty'];

    public function aset()
    {
        return $this->belongsTo(Aset::class);
    }
}
