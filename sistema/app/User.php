<?php

namespace App;

use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\meuResetDeSenha;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cpf', 'telefone', 'email', 'password', 'nivel_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function servico()
    {
        return $this->hasMany(
            servico::class
        );
    }

    public function contrato()
    {
        return $this->hasMany(
            Contratar::class
        );
    }

    public function nivel()
    {
        return $this->belongsTo(
            Nivel::class
        );
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new meuResetDeSenha($token));
    }
}
