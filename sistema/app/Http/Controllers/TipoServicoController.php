<?php

namespace App\Http\Controllers;

use App\TipoServico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TipoServicoController extends Controller
{
    public function cadastroTipoServico()
    {
        return view('tipo_servico/cadastro');
    }

    public function store(Request $request)
    {
        $tipo_servico = new TipoServico();

        $tipo_servico->nome = Input::get('nome');

        $tipo_servico->save();

        $mensagem = "Tipo de serviço cadastrado";

        return view('tipo_servico/cadastro')->with('mensagem', $mensagem);
    }

    public function editarTipoServico($id)
    {
        // Busca todos os produtos do banco de dados
        TipoServico::all();
        TipoServico::find($id);
        $tipo_servico = TipoServico::where("id", $id)->get();
        // Chama a view listar e envia os produtos buscados
        return view('tipo_servico/editar')->with('tipo_servico', $tipo_servico);
    }

    public function alterar(Request $request)
    {
        $id = Input::get('id');
        $tipo_servico = TipoServico::where('id', $id)->first();
        $tipo_servico->nome = Input::get('nome');
        $tipo_servico->save();

        $mensagem = "Tipo de serviço editado";

        return redirect('/tipo_servico/editar/' . $id . '')->with('mensagem', $mensagem);
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota                
        $usuario = TipoServico::destroy($id);

        // Excluindo este objeto
        //$usuario->delete();

        $mensagem = "Tipo de serviço excluído com sucesso!";


        return redirect('/tipo_servicos')->with('mensagem', $mensagem);
    }

    public function listarTipoServico()
    {
        // Busca todos os dados do banco de dados

        $tipo_servico = TipoServico::all();

        // Chama a view listar e envia os dados buscados
        return view('tipo_servico/listar')->with('tipo_servico', $tipo_servico);
    }
}
