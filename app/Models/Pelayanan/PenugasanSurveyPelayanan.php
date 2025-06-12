<?php

namespace App\Models\Pelayanan;

use App\Models\Kepegawaian\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenugasanSurveyPelayanan extends Model
{
    protected $table = 'pelayanan.penugasan_survey_pelayanan';
    public $incrementing = false;

    protected $casts = [
        'detail' => 'json',
    ];

    protected $guarded = [];
    /**
     * Get the petugas that owns the SpkPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class)->withTrashed();
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    public function registrasiPelayanan(): BelongsTo
    {
        return $this->belongsTo(RegistrasiPelayanan::class, 'id');
    }
}
