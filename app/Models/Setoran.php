<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    use HasFactory;
    protected $table = 'setorans';
    protected $fillable = [
        'nis',
        'name',
        'juz',
        'surat',
        'audio',
        'status'
    ];
}
