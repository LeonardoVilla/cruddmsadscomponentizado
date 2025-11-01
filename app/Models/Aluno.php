<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    protected $table = "Aluno";

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'nascimento',
        'curso'
    ]
}
