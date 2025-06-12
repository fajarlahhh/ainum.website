<?php

namespace App\Models\Ainum;

use App\Models\Pengguna;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubBagian extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'ainum.sub_bagian';
    
    /**
     * Get the bagian that owns the SubBagian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bagian(): BelongsTo
    {
        return $this->belongsTo(Bagian::class)->withTrashed();
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
}
