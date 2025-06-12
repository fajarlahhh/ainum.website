<?php

namespace App\Models\Ainum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Pegawai extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ainum.vw_pegawai';
    
    public function scopeBukanDirektur($query)
    {
        return $query->where('status_kepegawaian', '!=', 'Direktur');
    }
}
