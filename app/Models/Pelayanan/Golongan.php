<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Golongan extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'pelayanan.golongan';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The tarifRekeningAir that belong to the Golongan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tarifRekeningAir(): BelongsTo
    {
        return $this->belongsTo(TarifRekeningAir::class);
    }

    /**
     * Get all of the tarifRekeningAirDetail for the Golongan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarifRekeningAirDetail(): HasMany
    {
        return $this->hasMany(TarifRekeningAirDetail::class)->orderBy('min_pakai');
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
}
