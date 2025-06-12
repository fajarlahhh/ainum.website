<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Cabang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MutasiRayonPelanggan extends Model
{
    //
    protected $table = 'pelayanan.mutasi_rayon_pelanggan';

    protected $guarded = [];

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    public function rayonLama(): BelongsTo
    {
        return $this->belongsTo(Rayon::class, 'rayon_id_lama');
    }

    public function rayonBaru(): BelongsTo
    {
        return $this->belongsTo(Rayon::class, 'rayon_id_baru');
    }

    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }
}
