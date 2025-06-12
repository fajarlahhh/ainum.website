<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Pembayaran extends Model
{
    //
    protected $table = 'pelayanan.pembayaran';
    protected $guarded = [];

    /**
     * Get all of the rekeningAir for the Pembayaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rekeningAir(): BelongsTo
    {
        return $this->belongsTo(RekeningAir::class)->withTrashed();
    }

    /**
     * Get the rekeningNonAir that owns the Pembayaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rekeningNonAir(): BelongsTo
    {
        return $this->belongsTo(RekeningNonAir::class);
    }

    /**
     * Get the angsuranRekeningAirDetail that owns the Pembayaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function angsuranRekeningAirDetail(): BelongsTo
    {
        return $this->belongsTo(AngsuranRekeningAirDetail::class);
    }

    /**
     * Get the kasir that owns the Pembayaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kasir(): BelongsTo
    {
        return $this->belongsTo(Petugas::class);
    }

    /**
     * Get the pengguna that owns the Pembayaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(pengguna::class);
    }

    public function getBuktiLinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->bukti));
    }
}
