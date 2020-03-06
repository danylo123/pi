<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuario;

class UsuarioController extends Controller
{
    public function cadastroUsuario()
    {
        return view('usuario/cadastro');
    }

    public function editarUsuario($id)
    {
        // Busca todos os produtos do banco de dados
        $usuario = Usuario::select('select * from usuarios where id = ?', $id);
        // Chama a view listar e envia os produtos buscados
        return view('usuario/editar')->with('usuario', $usuario);
    }

    public function usuarios()
    {
        // Busca todos os produtos do banco de dados
        $usuario = Usuario::all();

        // Chama a view listar e envia os produtos buscados
        return view('usuario/listar')->with('usuario', $usuario);
    }
}
