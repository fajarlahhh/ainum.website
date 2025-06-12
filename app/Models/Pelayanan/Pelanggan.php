<?php

namespace App\Models\Pelayanan;

use App\Models\Ainum\Cabang;
use App\Models\Ainum\Kelurahan;
use App\Enums\StatuspelangganEnum;
use App\Models\Kepegawaian\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Pelanggan extends Model
{
    //
    use SoftDeletes;
    protected $table = 'pelayanan.pelanggan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['no_body_water_meter'];

    // Menentukan tipe data enum
    protected $casts = [
        'status' => StatuspelangganEnum::class,
        'waktu_segel' => 'datetime',
        'waktu_segel_permintaan_sendiri' => 'datetime',
        'waktu_bongkar' => 'datetime',
        'waktu_aktif' => 'datetime',
    ];

    /**
     * Get the tarifKhusus associated with the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function tarifKhusus(): HasOneThrough
    {
        return $this->hasOneThrough(TarifKhusus::class, PelangganTarifKhusus::class, 'pelanggan_id', 'id', 'id', 'tarif_khusus_id');
    }

    /**
     * Get all of the tunggakan for the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tunggakan(): HasMany
    {
        return $this->hasMany(RekeningAir::class)->where('terbayar', false);
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    /**
     * Get the golongan that owns the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function golongan(): BelongsTo
    {
        return $this->belongsTo(Golongan::class);
    }

    /**
     * Get the rayon that owns the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rayon(): BelongsTo
    {
        return $this->belongsTo(Rayon::class);
    }

    /**
     * Get the paketSr that owns the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paketSr(): BelongsTo
    {
        return $this->belongsTo(PaketSr::class);
    }

    /**
     * The penanggungJawab that belong to the KolektifRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function penanggungJawab(): HasOneThrough
    {
        return $this->HasOneThrough(Pegawai::class, KolektifRekeningAirPelanggan::class, 'pelanggan_id', 'id', 'id', 'penanggung_jawab_id');
    }

    /**
     * The kolektif that belong to the KolektifRekeningAir
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function kolektifRekeningAir(): HasOneThrough
    {
        return $this->HasOneThrough(KolektifRekeningAir::class, KolektifRekeningAirPelanggan::class, 'pelanggan_id', 'id', 'id', 'kolektif_rekening_air_id');
    }

    /**
     * Get the cabang that owns the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cabang(): BelongsTo
    {
        return $this->belongsTo(Cabang::class);
    }

    /**
     * Get the kelurahan that owns the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }
    
    /**
     * Get all of the mutasiStatusPelanggan for the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mutasiStatusPelanggan(): HasMany
    {
        return $this->hasMany(MutasiStatusPelanggan::class)->orderBy('created_at', 'desc');
    }

    public function getFotoWMLinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->foto_wm));
    }

    public function getFotoBangunanLinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->foto_bangunan));
    }

    public function getLatitudeAttribute()
    {
        return $this->koordinat ? $this->koordinat->latitude : null;
    }

    public function getLongitudeAttribute()
    {
        return $this->koordinat ? $this->koordinat->longitude : null;
    }

    public function getStatusPelangganAttribute($value)
    {
        switch ($value) {
            case 1:
                return 'Aktif';
                break;

            case 2:
                return 'Segel';
                break;

            case 3:
                return 'Segel Permintaan Sendiri';
                break;

            case 4:
                return 'Bongkar';
                break;
        }
    }
}
