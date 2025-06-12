<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RabPelayananPekerjaan extends Model
{
    //
    protected $table = 'pelayanan.rab_pelayanan_pekerjaan';
    protected $guarded = [];
    public $timestamps = false;
    
    /**
     * Get the tarifPekerjaan that owns the RabPelayananPekerjaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tarifPekerjaan(): BelongsTo
    {
        return $this->belongsTo(TarifPekerjaan::class);
    }
}
