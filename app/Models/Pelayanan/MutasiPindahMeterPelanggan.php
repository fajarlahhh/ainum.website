<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MutasiPindahMeterPelanggan extends Model
{
    //
    protected $table = 'pelayanan.mutasi_pindah_meter_pelanggan';

    protected $guarded = [];

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    public function getFotoSesudahLinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->foto_sesudah));
    }
}
