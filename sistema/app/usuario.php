<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{

    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'email',
        'telefone',
        'senha',
        'rua',
        'numero',
        'bairro'        
    ];
}
