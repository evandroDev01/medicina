<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $table = 'atendimentos'; /// identificando a tabela 
    protected $fillable = [ /// identificando todos os campos preenchíveis 
        'data_atendimento',
        'trabalhoAltura',
        'espacoConfinado',
        'apto',
        'coordenador_id',
        'empregado_id',
        'setor_id',
        'funcao_id',
        'grupo_id',
        'tipoAtendimento_id'
    ];

    use HasFactory;
}
