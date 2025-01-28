<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aqiqah extends Model
{
    use HasFactory;
    protected $table = 'aqiqah';
    protected $fillable = [
        'nama',
        'phone',
        'email',
        'lokasi',
        'link'
    ];
}

