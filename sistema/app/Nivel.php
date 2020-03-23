<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'telas'
    ];
}
