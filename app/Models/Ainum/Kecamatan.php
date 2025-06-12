<?php

namespace App\Models\Ainum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    //
    use HasFactory, SoftDeletes;
    
    protected $table = 'ainum.kecamatan';
    public $incrementing = false;
    protected $keyType = 'string';
}
