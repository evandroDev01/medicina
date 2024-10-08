<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoExame extends Model
{
    protected $table = 'grupoExame';

    protected $fillable = [
        'grupo_id',
        'exame_id',
        'tipoAtendimento_id'
    ];

    use HasFactory;
}
