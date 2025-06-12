<?php

namespace App\Models\Pelayanan;

use Carbon\Carbon;
use App\Models\Ainum\Cabang;
use App\Models\Ainum\Kelurahan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RekeningAir extends Model
{
    //
    use SoftDeletes;
    protected $table = 'pelayanan.rekening_air';
    public $incrementing = false;
    protected $guarded = [];

    protected function getTagihanAttribute()
    {
        return $this->harga_air + ($this->subsidi_dana_meter_administrasi == false ? $this->dana_meter + $this->administrasi : 0) - $this->diskon;
    }

    /**
     * Get the pelanggan that owns the KolektifRekeningAirPelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    /**
     * Get the tarifKhusus that owns the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tarifKhusus(): BelongsTo
    {
        return $this->belongsTo(TarifKhusus::class);
    }

    /**
     * Get the tarifRekeningAir that owns the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tarifRekeningAir(): BelongsTo
    {
        return $this->belongsTo(RekeningAir::class);
    }

    /**
     * Get the pembayaran associated with the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pembayaran(): HasOne
    {
        return $this->hasOne(Pembayaran::class);
    }

    /**
     * Get the golongan that owns the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function golongan(): BelongsTo
    {
        return $this->belongsTo(Golongan::class)->withTrashed();
    }

    /**
     * Get the rayon that owns the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rayon(): BelongsTo
    {
        return $this->belongsTo(Rayon::class);
    }

    /**
     * Get the cabang that owns the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }

    public function scopeTerbayar($query)
    {
        return $query->where('terbayar', true);
    }

    public function scopeBelumBayar($query)
    {
        return $query->where('terbayar', false);
    }

    public function getKelurahanIdAttribute()
    {
        return $this->detail['kelurahan_id'] ?? null;
    }

    /**
     * Get the drd associated with the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function drd(): HasOne
    {
        return $this->hasOne(Drd::class, 'id', 'id');
    }

    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    /**
     * Get the pengguna that owns the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class);
    }

    /**
     * Get all of the mutasiKoreksiRekeningAir for the RekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mutasiKoreksiRekeningAir(): HasMany
    {
        return $this->hasMany(MutasiKoreksiRekeningAir::class, 'rekening_air_id', 'id');
    }
}
