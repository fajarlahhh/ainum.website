<?php

namespace App\Models\Keuangan;

use Illuminate\Database\Eloquent\Model;

class JurnalDetail extends Model
{
    protected $table = 'keuangan.jurnal_detail';
    public $timestamps = false;

    protected $fillable = [
        'jurnal_id',
        'debet',
        'kredit',
    ];

    protected $casts = [
        'debet' => 'decimal:2',
        'kredit' => 'decimal:2',
    ];
}
