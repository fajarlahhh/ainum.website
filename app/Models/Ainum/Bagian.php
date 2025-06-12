<?php

namespace App\Models\Ainum;

use App\Models\Pengguna;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bagian extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'ainum.bagian';

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class)->withTrashed();
    }
}
