<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    protected $table = 'exames';
    protected $fillable = [
        'nome'
    ];

    use HasFactory;
}
