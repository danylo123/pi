<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagemServico extends Model
{
    protected $fillable = [
        'id',
        'servico_id',
        'arquivo'

    ];

    public function servico()
    {
        return $this->belongsTo(
            servico::class
        );
    }
}
