<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KolektifRekeningAirPelanggan extends Model
{
    //
    protected $table = 'pelayanan.kolektif_rekening_air_pelanggan';
    public $incrementing = false;
    protected $primaryKey =['kolektif_rekening_air_id', 'pelanggan_id'];

    /**
     * Get the pelanggan that owns the KolektifRekeningAirPelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
