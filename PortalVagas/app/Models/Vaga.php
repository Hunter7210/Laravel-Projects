<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vaga extends Model
{
    use Notifiable, HasFactory;

    protected $fillable = ['titulo', 'descricao', 'localizacao', 'salario', 'empresa'];

    public function inscricoes(){
        return $this->hasMany(Inscricao::class);
    }
}
