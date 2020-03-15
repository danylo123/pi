<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\servico;
use Illuminate\Support\Facades\Input;

class ServicoController extends Controller
{
    public function cadastroServico()
    {
        return view('servico/cadastro');
    }

    public function store(Request $request)
    {
        $servico = new servico();

        $servico->nome = Input::get('nome');
        $servico->descricao = Input::get('descricao');
        $servico->tipo = 1;
        $servico->rua = Input::get('rua');
        $servico->numero = Input::get('numero');
        $servico->bairro = Input::get('bairro');
        $servico->cidade = Input::get('cidade');
        $servico->id_usuario = 1;


        $servico->save();

        $mensagem = "Serviço cadastrado";

        return view('servico/cadastro')->with('mensagem', $mensagem);
    }


    public function editarServico($id)
    {
        // Busca todos os produtos do banco de dados
        servico::all();
        servico::find($id);
        $servico = servico::where("id", $id)->get();
        // Chama a view listar e envia os produtos buscados
        return view('servico/editar')->with('servico', $servico);
    }

    public function alterar(Request $request)
    {
        $id = Input::get('id');
        $servico = servico::where('id', $id)->first();
        
        $servico->nome = Input::get('nome');
        $servico->descricao = Input::get('descricao');
        $servico->tipo = 1;
        $servico->rua = Input::get('rua');
        $servico->numero = Input::get('numero');
        $servico->bairro = Input::get('bairro');
        $servico->cidade = Input::get('cidade');
        $servico->id_usuario = 1;


        $servico->save();

        $mensagem = "Serviço alterado";

        return redirect('/servico/editar/' . $id . '')->with('mensagem', $mensagem);
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota                
        $servico = servico::destroy($id);

        // Excluindo este objeto
        //$usuario->delete();

        $mensagem = "Serviço excluído com sucesso!";


        return redirect('/servicos')->with('mensagem', $mensagem);
    }

    public function listarServico()
    {
        // Busca todos os dados do banco de dados
        $servico = Servico::all();

        // Chama a view listar e envia os dados buscados
        return view('servico/listar')->with('servico', $servico);
    }
}
