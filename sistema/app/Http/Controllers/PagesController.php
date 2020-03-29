<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
        
    public function ouvidoria()
    {
        return view('ouvidoria/ouvidoria');
    }

    public function duvidas()
    {
        return view('duvidas_frequentes/duvidas');
    }

    public function loginCadastro()
    {
        return view('login/cadastro');
    }

    public function login()
    {
        return view('login/login');
    }
}
