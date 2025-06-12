<?php

namespace App\Models\Kepegawaian;

use App\Models\Kepegawaian\Jabatan;
use App\Models\Ainum\Bagian;
use App\Models\Ainum\Cabang;
use App\Models\Ainum\Kantor;
use App\Models\Ainum\SubBagian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $table = 'kepegawaian.pegawai';
    
    public function scopeAktif($query)
    {
        return $query->whereNull('mutasi_pemberhentian_id');
    }

    public function scopeNonAktif($query)
    {
        return $query->whereNotNull('mutasi_pemberhentian_id');
    }

    public function scopeBukanDirektur($query)
    {
        return $query->where('status_kepegawaian', '!=', 'Direktur');
    }

    /**
     * Get the kantor that owns the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kantor(): BelongsTo
    {
        return $this->belongsTo(Kantor::class);
    }
    
    /**
     * Get the jabatan that owns the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class)->withTrashed();
    }

    /**
     * Get the bagian that owns the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bagian(): BelongsTo
    {
        return $this->belongsTo(Bagian::class)->withTrashed();
    }

    /**
     * Get the subBagian that owns the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subBagian(): BelongsTo
    {
        return $this->belongsTo(SubBagian::class)->withTrashed();
    }

    /**
     * Get the cabang that owns the Pegawai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }
}
