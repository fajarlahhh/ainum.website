<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notifikasi extends Model
{
    //

    protected $table = 'pelayanan.ainum.notifikasi';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Get the asal that owns the Notifikasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asal(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'asal_id');
    }
}
