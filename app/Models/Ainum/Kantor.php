<?php

namespace App\Models\Ainum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kantor extends Model
{
    //
    use SoftDeletes;

    protected $table = 'ainum.kantor';
}
