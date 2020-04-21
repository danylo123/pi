<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratar extends Model
{
    protected $fillable = [
        'id',
        'servico_id',
        'user_id'
    ];

    public function servico()
    {
        return $this->hasMany(
            servico::class
        );
    }
}
