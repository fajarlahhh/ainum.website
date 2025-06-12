<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class KolektifRekeningAir extends Model
{
    //
    protected $table = 'pelayanan.kolektif_rekening_air';

    /**
     * Get all of the kolektifRekeningAirPelanggan for the KolektifRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kolektifRekeningAirPelanggan(): HasMany
    {
        return $this->hasMany(KolektifRekeningAirPelanggan::class);
    }

    /**
     * The pelanggan that belong to the KolektifRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pelanggan(): BelongsToMany
    {
        return $this->belongsToMany(Pelanggan::class)->withPivot('penanggung_jawab_id');
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
}
