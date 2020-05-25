<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ouvidoria extends Model
{
    protected $fillable = [
        'id',
        'assunto',
        'observacao',
        'user_id',
        'estado'
    ];
}
