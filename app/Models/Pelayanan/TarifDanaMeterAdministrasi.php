<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TarifDanaMeterAdministrasi extends Model
{
    use HasFactory;
    protected $table = 'pelayanan.tarif_dana_meter_administrasi';
    protected $casts = [
        'detail' => 'json',
    ];
    //
    
    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
}
