<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'id',
        'contratar_id',
        'user_id',
        'mensagem',
        'visto'
    ];

    public function contratar()
    {
        return $this->belongsTo(
            Contratar::class
        );
    }

    public function usuario()
    {
        return $this->belongsTo(
            User::class
        );
    }
}
