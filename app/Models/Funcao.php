<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    protected $table = 'funcaos';

    protected $fillable = [
        'nome'
    ];

    use HasFactory;
}
