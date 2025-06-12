<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class TarifRekeningAir extends Model
{
    //
    use HasFactory;
    protected $table = 'pelayanan.tarif_rekening_air';

    /**
     * The golongan that belong to the TarifRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function golongan(): BelongsToMany
    {
        return $this->belongsToMany(Golongan::class)->orderBy('id');
    }

    /**
     * Get all of the tarifRekeningAirDetail for the TarifRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarifRekeningAirDetail(): HasMany
    {
        return $this->hasMany(TarifRekeningAirDetail::class)->orderBy('golongan_id')->orderBy('min_pakai');
    }

    /**
     * Get the pengguna that owns the TarifRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
    
    public function scopeAktif($query)
    {
        return $query->where('aktif', true);
    }

    protected static function booted(): void
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('tanggal_berlaku', 'desc');
        });
    }
}
