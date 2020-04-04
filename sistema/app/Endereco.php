<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cidade', 'estado', 'user_id'
    ];
}
