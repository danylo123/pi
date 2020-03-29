<?php

namespace App\Http\Controllers;

use App\Nivel;
use Illuminate\Http\Request;

use App\usuario;
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
        $usuario = Usuario::all();

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
        $usuario = new usuario();

        $usuario->nome = Input::get('nome');
        $usuario->cpf = Input::get('cpf');
        $usuario->cpf = trim($usuario->cpf);
        $usuario->cpf = str_replace(".", "", $usuario->cpf);
        $usuario->cpf = str_replace("-", "", $usuario->cpf);
        $usuario->cpf;
        $usuario->email = Input::get('email');
        $usuario->telefone = Input::get('telefone');
        $usuario->telefone = trim($usuario->telefone);
        $usuario->telefone = str_replace("(", "", $usuario->telefone);
        $usuario->telefone = str_replace(")", "", $usuario->telefone);
        $usuario->telefone = str_replace("-", "", $usuario->telefone);
        $usuario->telefone = str_replace(" ", "", $usuario->telefone);
        $usuario->telefone;
        $usuario->senha = Input::get('senha');
        $usuario->rua = Input::get('rua');
        $usuario->numero = Input::get('numero');
        $usuario->bairro = Input::get('bairro');
        $usuario->nivel_id = Input::get('nivel');

        $usuario->save();

        $mensagem = "Usuario cadastrado";

        return redirect('usuario/cadastro')->with('mensagem', $mensagem);
    }

    public function editarUsuario($id)
    {
        // Busca todos os produtos do banco de dados
        Usuario::all();
        Usuario::find($id);
        $usuario = Usuario::where("id", $id)->get();

        $nivel = Nivel::all();
        // Chama a view listar e envia os produtos buscados
        return view('usuario/editar')->with('usuario', $usuario)->with('nivel', $nivel);
    }

    public function alterar(Request $request)
    {
        $id = Input::get('id');
        $usuario = usuario::where('id', $id)->first();

        $usuario->nome = Input::get('nome');
        $usuario->cpf = Input::get('cpf');
        $usuario->cpf = trim($usuario->cpf);
        $usuario->cpf = str_replace(".", "", $usuario->cpf);
        $usuario->cpf = str_replace("-", "", $usuario->cpf);
        $usuario->cpf;
        $usuario->email = Input::get('email');
        $usuario->telefone = Input::get('telefone');
        $usuario->telefone = trim($usuario->telefone);
        $usuario->telefone = str_replace("(", "", $usuario->telefone);
        $usuario->telefone = str_replace(")", "", $usuario->telefone);
        $usuario->telefone = str_replace("-", "", $usuario->telefone);
        $usuario->telefone = str_replace(" ", "", $usuario->telefone);
        $usuario->telefone;
        $usuario->senha = Input::get('senha');
        $usuario->rua = Input::get('rua');
        $usuario->numero = Input::get('numero');
        $usuario->bairro = Input::get('bairro');
        $usuario->nivel_id = Input::get('nivel');

        $usuario->save();

        $mensagem = "Usuário editado";

        return redirect('/usuario/editar/' . $id . '')->with('mensagem', $mensagem);
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota                
        $usuario = usuario::destroy($id);

        // Excluindo este objeto
        //$usuario->delete();

        $mensagem = "Usuário excluído com sucesso!";


        return redirect('/usuarios')->with('mensagem', $mensagem);
    }
}
