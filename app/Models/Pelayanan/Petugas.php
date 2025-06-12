<?php

namespace App\Models\Pelayanan;

use App\Models\Kepegawaian\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Model
{
    //
    use HasFactory;
    public $incrementing = false;
    protected $table = 'pelayanan.petugas';
    protected $guarded = [];

    /**
     * Get the pegawai that owns the Petugas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class)->withTrashed();
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    public function login(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'id', 'id')->withTrashed();
    }

    public function ppob(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    public function scopeAktif($query)
    {
        return $query->where('aktif', true);
    }
}
