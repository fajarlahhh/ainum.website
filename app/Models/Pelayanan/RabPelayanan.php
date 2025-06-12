<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RabPelayanan extends Model
{
    //
    protected $table = 'pelayanan.rab_pelayanan';
    public $incrementing = false;
    protected $guarded = [];

    /**
     * Get all of the rabPelayananBarang for the RabPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rabPelayananBarang(): HasMany
    {
        return $this->hasMany(RabPelayananBarang::class)->with('aset');
    }

    /**
     * Get all of the rabPelayananPekerjaan for the RabPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rabPelayananPekerjaan(): HasMany
    {
        return $this->hasMany(RabPelayananPekerjaan::class)->with('tarifPekerjaan');
    }
    
    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }

    /**
     * Get the registrasiPelayanan that owns the RabPelayanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registrasiPelayanan(): BelongsTo
    {
        return $this->belongsTo(RegistrasiPelayanan::class,'id');
    }
}
