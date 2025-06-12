<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TarifRekeningAirDetail extends Model
{
    //
    protected $table = 'pelayanan.tarif_rekening_air_detail';
    public $incrementing = false;
    protected $primaryKey = ['golongan_tarif_rekening_air_id', 'min_pakai'];

    /**
     * Get the golongan that owns the TarifRekeningAirDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function golongan(): BelongsTo
    {
        return $this->belongsTo(Golongan::class);
    }
}
