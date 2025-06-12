<?php

namespace App\Models\Pelayanan;

use App\Models\Aset\Aset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PaketSr extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'pelayanan.paket_sr';

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    /**
     * Get all of the paketSrDetail for the PaketSr
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paketSrDetail(): HasMany
    {
        return $this->hasMany(PaketSrDetail::class);
    }
}
