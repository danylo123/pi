<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratar extends Model
{
    protected $fillable = [
        'id',
        'servico_id',
        'user_id',
        'estado',
        'observacao'
    ];

    public function servico()
    {
        return $this->belongsTo(
            servico::class
        );
    }

    public function usuario()
    {
        return $this->hasMany(
            User::class
        );
    }
}
