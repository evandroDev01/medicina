<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtendimentoRisco extends Model
{
    protected $table = 'atendimentoRiscos';
    protected $fillable = [
        'tipoAtendimento_id',
        'risco_id'
    ];

    use HasFactory;
}
