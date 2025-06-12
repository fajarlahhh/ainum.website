<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class TarifKhusus extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'pelayanan.tarif_khusus';

    /**
     * Get all of the tarifKhususDetal for the TarifKhusus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarifKhususDetail(): HasMany
    {
        return $this->hasMany(TarifKhususDetail::class)->orderBy('min_pakai');
    }

    /**
     * The pelanggan that belong to the TarifKhusus
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pelanggan(): BelongsToMany
    {
        return $this->belongsToMany(Pelanggan::class);
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
}
