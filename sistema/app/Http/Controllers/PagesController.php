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
}
