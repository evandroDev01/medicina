<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'permissaos';

    protected $fillable = [
        'tipoUsuario_id',
        'formulario_id',
        'inclui',
        'altera',
        'excluir'
    ];

    use HasFactory;
}
