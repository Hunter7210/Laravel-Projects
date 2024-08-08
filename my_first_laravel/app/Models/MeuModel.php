<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* Para uma boa pratica é necessário ter um model muito bem completo, com Getters and Setters */
class MeuModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'valor',
    ];
}
