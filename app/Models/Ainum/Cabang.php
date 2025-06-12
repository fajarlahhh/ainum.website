<?php

namespace App\Models\Ainum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cabang extends Model
{
    //
    use HasFactory, SoftDeletes;
    
    protected $table = 'ainum.cabang';
}
