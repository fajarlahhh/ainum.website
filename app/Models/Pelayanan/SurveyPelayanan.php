<?php

namespace App\Models\Pelayanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SurveyPelayanan extends Model
{
    //
    protected $table = 'pelayanan.survey_pelayanan';
    public $incrementing = false;
    protected $casts = [
        'detail' => 'json',
    ];

    protected $guarded = [];
    
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
    
    public function getFoto1LinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->detail['foto_1']));
    }
    
    public function getFoto2LinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->detail['foto_2']));
    }
    
    public function getFoto3LinkAttribute()
    {
        return Storage::url(str_replace('public/', '', $this->detail['foto_3']));
    }
}
