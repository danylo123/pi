<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function perfil()
    {
        return view('perfil/perfil');
    }

    public function editar()
    {
        return view('perfil/editar');
    }
}
