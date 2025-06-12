<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RegistrasiPelayananOnline extends Model
{
    protected $table = 'pelayanan.registrasi_pelayanan_online';

    protected $casts = [
        'detail' => 'json',
    ];

    protected $guarded = [];

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function jenisPelayanan(): BelongsTo
    {
        return $this->belongsTo(JenisPelayanan::class);
    }

    public function jenisPengaduan(): BelongsTo
    {
        return $this->belongsTo(JenisPengaduan::class);
    }
}
