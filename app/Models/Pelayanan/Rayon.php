<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Kelurahan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rayon extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'pelayanan.rayon';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Get the petugas that owns the Rayon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'petugas_id', 'id')->withTrashed();
    }

    /**
     * Get the kelurahan that owns the Rayon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
}
