<?php

namespace App\Models\Pelayanan;

use App\Models\Aset\Aset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RabPelayananBarang extends Model
{
    //
    protected $table = 'pelayanan.rab_pelayanan_barang';
    protected $guarded = [];
    public $timestamps = false;

    /**
     * Get the aset that owns the RabPelayananBarang
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aset(): BelongsTo
    {
        return $this->belongsTo(Aset::class);
    }
}
