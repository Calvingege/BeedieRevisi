<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{
    use HasFactory;

    protected $fillable = [
        'NamaBarang',
        'HargaLimit',
        'FotoBarang',
        'time_end',
        'HargaLelang'
    ];
}
