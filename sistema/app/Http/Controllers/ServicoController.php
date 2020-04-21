<?php

namespace App\Http\Controllers;

use App\ImagemServico;
use Illuminate\Http\Request;

use App\servico;
use App\TipoServico;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ServicoController extends Controller
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

    public function cadastroServico()
    {
        $tipo_servico = TipoServico::all();
        return view('servico/cadastro')->with('tipo_servico', $tipo_servico);
    }

    public function store(Request $resquest)
    {
        $servico = new servico();

        $data = $resquest->all();

        $servico->nome = Input::get('nome');
        $servico->descricao = Input::get('descricao');
        $servico->menor_preco = Input::get('menor_preco');
        $servico->maior_preco = Input::get('maior_preco');        
        $servico->tipo_servico_id = Input::get('tipo');
        $servico->user_id = auth()->user()->id;
    

        $insert = $servico->save($data);


        if ($insert) {
            return redirect()->route('servicos')->with('success', 'Cadastrado com sucesso');
        } else {
            return redirect()->back()->with('error', 'Falha ao salvar o serviço...');
        }
    }


    public function editarServico($id)
    {
        // Busca todos os produtos do banco de dados
        servico::all();
        servico::find($id);
        $servico = servico::where("id", $id)->get();

        $tipo_servico = TipoServico::all();
        // Chama a view listar e envia os produtos buscados
        return view('servico/editar')->with('servico', $servico)->with('tipo_servico', $tipo_servico);
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

    public function listarServico(Request $request)
    {
        // Busca todos os dados do banco de dados pelo id do usuário
        $id = auth()->user()->id;
        servico::all();
        servico::find($id);        
        $servico = servico::where("user_id", $id)->with('arquivo')->get();           
         

        // Chama a view listar e envia os dados buscados
        return view('servico/listar')->with('servico', $servico);
    }

    public function alterar(Request $resquest)
    {
        $id = Input::get('id');        
        $servico = servico::find($id);        



        if ($resquest->hasFile('imagem') && $resquest->file('imagem')->isValid()) {

            $name = uniqid(date('HisYmd'));

            $extenstion = $resquest->imagem->extension();
            $nameFile = "{$name}.{$extenstion}";

            $servico['imagem'] = $nameFile;

            $upload = $resquest->imagem->storeAs('servicos', $nameFile);

            if (!$upload) {
                return redirect()->back()->with('error', 'Falha ao realizar upload da imagem');
            }
        }

        $servico['nome'] = $servico->nome;
        $servico['descricao'] = $servico->descricao;
        $servico['menor_preco'] = $servico->menor_preco;
        $servico['maior_preco'] = $servico->maior_preco;
        $servico['tipo_servico_id'] = $servico->tipo_servico_id;



        $update = $servico->update();

        if ($update) {
            return redirect()->route('servicos')->with('success', 'Sucesso ao atualizar');
        } else {
            return redirect()->back()->with('error', 'Falha ao atualizar o serviço...');
        }
    }


    public function listarTodosServico()
    {
        // Busca todos os dados do banco de dados pelo id do usuário
        $servico = servico::all();
        

        // Chama a view listar e envia os dados buscados
        return view('servico/listar_todos')->with('servico', $servico);
    }
}
