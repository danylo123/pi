<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servico extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'tipo',
        'rua',
        'numero',
        'bairro',
        'cidade',
        'id_usuario'
    ];

    public function tipo_servico()
    {
        return $this->belongsTo(
            'App\TipoServico'
        );}
}
