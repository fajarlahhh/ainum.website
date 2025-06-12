<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AngsuranRekeningAirDetail extends Model
{
    //
    protected $table = 'pelayanan.angsuran_rekening_air_detail';
    
    public function scopeBelumBayar($query)
    {
        return $query->whereNull(['waktu_bayar', 'kasir']);
    }

    /**
     * Get the angsuranRekeningAir that owns the AngsuranRekeningAirDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function angsuranRekeningAir(): BelongsTo
    {
        return $this->belongsTo(AngsuranRekeningAir::class);
    }
}
