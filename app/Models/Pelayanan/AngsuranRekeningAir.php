<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AngsuranRekeningAir extends Model
{
    //
    protected $table = 'pelayanan.angsuran_rekening_air';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Get the pelanggan that owns the AngsuranRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
