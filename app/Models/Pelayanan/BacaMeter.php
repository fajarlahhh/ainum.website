<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Cabang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BacaMeter extends Model
{
    //
    use HasFactory;
    
    protected $table = 'pelayanan.baca_meter';
    public $incrementing = false;
    protected $guarded = [];

    /**
     * Get the validator that owns the BacaMeter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function validator(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'validator_id');
    }

    /**
     * Get the pembaca that owns the BacaMeter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pembaca(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    /**
     * Get the pelanggan that owns the BacaMeter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    /**
     * Get the rekeningAir associated with the BacaMeter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rekeningAir(): HasOne
    {
        return $this->hasOne(RekeningAir::class);
    }

    /**
     * Get the rayon that owns the BacaMeter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rayon(): BelongsTo
    {
        return $this->belongsTo(Rayon::class);
    }

    /**
     * Get the cabang that owns the BacaMeter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }

    /**
     * Get the drd associated with the BacaMeter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function drd(): HasOne
    {
        return $this->hasOne(Drd::class, 'pelanggan_id', 'pelanggan_id');
    }

    /**
     * Get all of the rekeningAirPelangganTigaBulan for the BacaMeter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rekeningAirPelangganTigaBulan(): HasMany
    {
        return $this->hasMany(RekeningAir::class, 'pelanggan_id', 'pelanggan_id')->orderBy('periode', 'desc')->take(3);
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
    
    public function getFotoLinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->foto));
    }
}
