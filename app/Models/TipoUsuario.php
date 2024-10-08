<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipoUsuarios';

    protected $fillable = [
        'nome'
    ];

    use HasFactory;
}
