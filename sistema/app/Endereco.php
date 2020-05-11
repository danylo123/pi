<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    
    protected $fillable = [
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'user_id'
    ];
}
