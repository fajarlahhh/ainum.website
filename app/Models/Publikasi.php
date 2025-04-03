<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    //
    protected $table = 'publikasi';
    public $incrementing = false;
    protected $keyType = 'string';

    public function scopePengumuman($query)
    {
        return $query->where('jenis', 'pengumuman')->orderBy('created_at', 'desc');
    }
}
