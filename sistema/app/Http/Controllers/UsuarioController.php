<?php

namespace App\Http\Controllers;

use App\Nivel;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;

class UsuarioController extends Controller
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

    public function usuarios()
    {
        // Busca todos os produtos do banco de dados
        $usuario = User::all();

        // Chama a view listar e envia os produtos buscados
        return view('usuario/listar')->with('usuario', $usuario);
    }


    public function cadastroUsuario()
    {
        $nivel = Nivel::all();

        return view('usuario/cadastro')->with('nivel', $nivel);
    }

    public function store(Request $request)
    {
        $usuario = new User();

        $data = $request->all();

        $insert = $usuario->save($data);

        if ($insert) {
            return redirect('usuario/cadastro')->with('success', 'Usuário cadastrado com sucesso!');
        } else {
            return redirect('usuario/cadastro')->with('error', 'Erro ao cadastrar usuário!');
        }

    }

    public function editarUsuario($id)
    {
        // Busca todos os produtos do banco de dados
        User::all();
        User::find($id);
        $usuario = User::where("id", $id)->get();

        $nivel = Nivel::all();
        // Chama a view listar e envia os produtos buscados
        return view('usuario/editar')->with('usuario', $usuario)->with('nivel', $nivel);
    }

    public function alterar(Request $request)
    {
        $data = $request->all();

        $usuario = User::find($request->id);


        $update = $usuario->update($data);

        if ($update) {
            return redirect('/usuario/editar/' . $request->id . '')->with('success', 'Sucesso ao atualizar usuário');
        } else {
            return redirect('/usuario/editar/' . $request->id . '')->with('error', 'Falha ao atualizar o usuário...');
        }
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota                
        $usuario = User::destroy($id);

        // Excluindo este objeto
        //$usuario->delete();

        $mensagem = "Usuário excluído com sucesso!";


        return redirect('/usuarios')->with('mensagem', $mensagem);
    }
}
