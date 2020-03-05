<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function cadastroUsuario()
    {
        return view('usuario/cadastro');
    }

    public function editarUsuario($id)
    {
        return view('usuario/editar');
    }

    public function listarUsuario()
    {
        return view('usuario/listar');
    }

    public function cadastroServico()
    {
        return view('servico/cadastro');
    }

    public function editarServico($id)
    {
        return view('servico/editar');
    }

    public function listarServico()
    {
        return view('servico/listar');
    }

    public function ouvidoria()
    {
        return view('ouvidoria/ouvidoria');
    }

    public function duvidas()
    {
        return view('duvidas_frequentes/duvidas');
    }
}
