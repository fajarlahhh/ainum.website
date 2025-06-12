<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Cabang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MutasiKoreksiRekeningAir extends Model
{
    //
    protected $table = 'pelayanan.mutasi_koreksi_rekening_air';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [];

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    public function rekeningAir(): BelongsTo
    {
        return $this->belongsTo(RekeningAir::class);
    }

    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }

    /**
     * Get the golonganLama that owns the MutasiKoreksiRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function golonganLama(): BelongsTo
    {
        return $this->belongsTo(Golongan::class, 'golongan_id_lama', 'id');
    }

    /**
     * Get the golonganLama that owns the MutasiKoreksiRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function golonganBaru(): BelongsTo
    {
        return $this->belongsTo(Golongan::class, 'golongan_id_baru', 'id');
    }
}
