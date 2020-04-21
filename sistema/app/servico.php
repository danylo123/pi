<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servico extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'menor_preco',
        'maior_preco',
        'tipo_servico_id',
        'user_id'
    ];

    public function tipo_servico()
    {
        return $this->belongsTo(
            'App\TipoServico'
        );
    }

    public function arquivo()
    {
        return $this->hasMany(
            ImagemServico::class
        );
    }

    public function user()
    {
        return $this->belongsTo(
            User::class
        );
    }
}
