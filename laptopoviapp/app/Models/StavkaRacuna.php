<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StavkaRacuna extends Model
{
    use HasFactory;
    protected $fillable = [
        'laptop',
        'kolicina',
        'racun'
    ];
}
