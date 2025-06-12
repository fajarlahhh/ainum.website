<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Kelurahan;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Illuminate\Database\Eloquent\Relations\HasOne;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class RegistrasiPelayanan extends Model
{
    //
    use SoftDeletes, HasSpatial;
    protected $table = 'pelayanan.registrasi_pelayanan';

    protected $casts = [
        'detail' => 'json',
        'koordinat' => Point::class,
    ];

    protected $guarded = [];

    /**
     * Get the kelurahan that owns the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    /**
     * Get the pelanggan that owns the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    /**
     * Get the pengguna that owns the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    public function getLatitudeAttribute()
    {
        return $this->koordinat ? $this->koordinat->latitude : null;
    }

    public function getLongitudeAttribute()
    {
        return $this->koordinat ? $this->koordinat->longitude : null;
    }

    /**
     * Get the rab associated with the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rabPelayanan(): HasOne
    {
        return $this->hasOne(RabPelayanan::class, 'id');
    }

    /**
     * Get the rekeningNonAir associated with the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rekeningNonAir(): HasOne
    {
        return $this->hasOne(RekeningNonAir::class);
    }

    /**
     * Get the spkPelayanan associated with the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function spkPelayanan(): HasOne
    {
        return $this->hasOne(SpkPelayanan::class, 'id');
    }

    public function surveyPelayanan(): HasOne
    {
        return $this->hasOne(SurveyPelayanan::class, 'id');
    }

    /**
     * Get the penugasanSurveyPelayanan associated with the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penugasanSurveyPelayanan(): HasOne
    {
        return $this->hasOne(PenugasanSurveyPelayanan::class, 'id');
    }

    /**
     * Get the beritaAcaraPelayanan associated with the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function beritaAcaraPelayanan(): HasOne
    {
        return $this->hasOne(BeritaAcaraPelayanan::class, 'id');
    }

    public function rkpPelayanan(): HasOne
    {
        return $this->hasOne(RkpPelayanan::class, 'id');
    }

    public function pembayaran(): HasOneThrough
    {
        return $this->hasOneThrough(Pembayaran::class, RekeningNonAir::class, 'registrasi_pelayanan_id', 'rekening_non_air_id', 'id', 'id');
    }

    /**
     * Get the rekeningNonAirTerbayar associated with the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rekeningNonAirTerbayar(): HasOne
    {
        return $this->hasOne(RekeningNonAir::class)->where('terbayar', true);
    }

    public function rekeningNonAirBelumTerbayar(): HasOne
    {
        return $this->hasOne(RekeningNonAir::class)->where('terbayar', false);
    }

    /**
     * Get the jenisPelayanan that owns the RegistrasiPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenisPelayanan(): BelongsTo
    {
        return $this->belongsTo(JenisPelayanan::class);
    }

    public function jenisPengaduan(): BelongsTo
    {
        return $this->belongsTo(JenisPengaduan::class);
    }

    public function scopeBatal(Builder $query)
    {
        return $query->whereNotNull('pembatal_id');
    }

    public function scopeTidakBatal(Builder $query)
    {
        return $query->whereNull('pembatal_id');
    }

    public function pembatal(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'pembatal_id');
    }
}
