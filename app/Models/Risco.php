<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risco extends Model
{
    protected $table = 'riscos';

    protected $fillable = [
        'nome',
        'tipoRisco_id'
    ];

    use HasFactory;
}
