<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Cabang;
use App\Enums\StatuspelangganEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drd extends Model
{
    //
    protected $table = 'pelayanan.drd';
    // Menentukan tipe data enum
    protected $casts = [
        'status_pelanggan' => StatuspelangganEnum::class,
    ];
    
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }

    public function rayon(): BelongsTo
    {
        return $this->belongsTo(Rayon::class);
    }
}
