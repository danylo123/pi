<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function perfil()
    {
        return view('perfil/perfil');
    }

    public function editar()
    {
        return view('perfil/editar');
    }
}
