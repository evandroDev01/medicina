<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empregado extends Model
{
    protected $table = 'empregados';
    protected $fillable = [
        'nome',
        'cpf',
        'ctps',
        'serie',
        'data_nascimento',
        'data_admissao',
        'setor_id',
        'funcao_id',
        'grupo_id'
    ];

    use HasFactory;
}
