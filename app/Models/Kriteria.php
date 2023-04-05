<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'keterangan',
        'sub_id'
    ];

    protected $table = 'kriteria';
    protected $primarykey = 'idkriteria';
    // public $timestamps = 'false';
}
