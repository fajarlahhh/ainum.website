<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Cabang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MutasiGolonganPelanggan extends Model
{
    //
    protected $table = 'pelayanan.mutasi_golongan_pelanggan';

    protected $guarded = [];

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    /**
     * Get the cabang that owns the MutasiGolonganPelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }


    /**
     * Get the pelanggan that owns the MutasiGolonganPelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
