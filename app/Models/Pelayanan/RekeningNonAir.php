<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RekeningNonAir extends Model
{
    //
    protected $table = 'pelayanan.rekening_non_air';

    protected $guarded = [];

    /**
     * Get all of the pembayaran for the RekeningNonAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pembayaran(): HasOne
    {
        return $this->hasOne(Pembayaran::class);
    }

    public function scopeBelumBayar($query)
    {
        return $query->whereDoesntHave('pembayaran');
    }
    
    /**
     * Get the registrasiPelayanan that owns the RekeningNonAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registrasiPelayanan(): BelongsTo
    {
        return $this->belongsTo(RegistrasiPelayanan::class);
    }
    
    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
}
