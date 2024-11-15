<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setors';

    protected $fillable = [
        'nome'
    ];

    use HasFactory;
}
