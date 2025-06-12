<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeritaAcaraPelayanan extends Model
{
    //
    protected $table = 'pelayanan.berita_acara_pelayanan';
    public $incrementing = false;

    protected $casts = [
        'detail' => 'json',
    ];


    protected $guarded = [];

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
    
    public function registrasiPelayanan(): BelongsTo
    {
        return $this->belongsTo(RegistrasiPelayanan::class,'id');
    }
}
