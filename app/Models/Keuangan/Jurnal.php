<?php

namespace App\Models\Keuangan;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = 'keuangan.jurnal';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $casts = [
        'detail' => 'json',
    ];
}
