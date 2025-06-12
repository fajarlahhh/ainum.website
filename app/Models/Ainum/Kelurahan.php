<?php

namespace App\Models\Ainum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelurahan extends Model
{
    //
    use HasFactory, SoftDeletes;
    
    protected $table = 'ainum.kelurahan';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Get the kecamatan that owns the Kelurahan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
