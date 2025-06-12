<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Cabang;
use App\Enums\StatuspelangganEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MutasiStatusPelanggan extends Model
{
    //
    protected $table = 'pelayanan.mutasi_status_pelanggan';
    protected $casts = [
        'status_lama' => StatuspelangganEnum::class,
        'status_baru' => StatuspelangganEnum::class,
    ];

    protected $guarded = [];

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function getFotoSebelumLinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->foto_sebelum));
    }

    public function getFotoSesudahLinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->foto_sesudah));
    }

    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }
}
