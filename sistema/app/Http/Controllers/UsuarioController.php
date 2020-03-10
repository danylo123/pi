<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuario;
use Illuminate\Support\Facades\Input;

class UsuarioController extends Controller
{
    public function usuarios()
    {
        // Busca todos os produtos do banco de dados
        $usuario = Usuario::all();

        // Chama a view listar e envia os produtos buscados
        return view('usuario/listar')->with('usuario', $usuario);
    }


    public function cadastroUsuario()
    {
        return view('usuario/cadastro');
    }

    public function store(Request $request)
    {
        $usuario = new usuario();

        $usuario->nome = Input::get('nome');
        $usuario->cpf = Input::get('cpf');
        $usuario->email = Input::get('email');
        $usuario->telefone = Input::get('telefone');
        $usuario->senha = Input::get('senha');
        $usuario->rua = Input::get('rua');
        $usuario->numero = Input::get('numero');
        $usuario->bairro = Input::get('bairro');

        $usuario->save();

        $mensagem = "Usuario cadastrado";

        return view('usuario/cadastro')->with('mensagem', $mensagem);
    }

    public function editarUsuario($id)
    {
        // Busca todos os produtos do banco de dados
        Usuario::all();
        Usuario::find($id);
        $usuario = Usuario::where("id", $id)->get();
        // Chama a view listar e envia os produtos buscados
        return view('usuario/editar')->with('usuario', $usuario);
    }

    public function alterar()
    {
        $id = Input::get('id');
        $usuario = Usuario::all();
        $usuario = Usuario::find($id);
        $usuario = Usuario::where("id", $id)->get();

        $usuario->nome = Input::get('nome');
        $usuario->cpf = Input::get('cpf');
        $usuario->email = Input::get('email');
        $usuario->telefone = Input::get('telefone');
        $usuario->senha = Input::get('senha');
        $usuario->rua = Input::get('rua');
        $usuario->numero = Input::get('numero');
        $usuario->bairro = Input::get('bairro');

        $usuario->save();

        $mensagem = "Usuário editado";

        return view('usuario/listar')->with('mensagem', $mensagem);
    }

    public function excluir($id, Request $request)
    {
        // Criando um objeto com o id recebido pela rota        
        Usuario::all();
        Usuario::find($id);
        $u = Usuario::where("id", $id)->get();

        // Excluindo este objeto
        $u->delete();

        $mensagem = "Usuário excluído com sucesso!";

        $u = Usuario::all();

        return redirect('/usuario/listar')->with('mensagem', $mensagem);
    }
}
