<?php

namespace App\Http\Controllers;

use App\ImagemServico;
use Illuminate\Http\Request;

class ImagemServicoController extends Controller
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

    public function cadastrar($id)
    {

        $imagem = ImagemServico::where("servico_id", $id)->get();

        return view('servico/cadastro_imagem')->with('servico_id', $id)->with('imagem', $imagem);
    }

    public function store(Request $resquest)
    {
        $imagem = new ImagemServico();

        $data = $resquest->all();

        $imagem->arquivo = $resquest->arquivo;
        $imagem->servico_id = $resquest->servico_id;

        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));

        // Recupera a extensão do arquivo
        $extension = $resquest->arquivo->extension();

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";

        $imagem->arquivo = $nameFile;

        // Faz o upload:
        $upload = $resquest->arquivo->storeAs('servicos', $nameFile);

        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

        // Verifica se NÃO deu certo o upload (Redireciona de volta)
        if (!$upload)
            return redirect('servicos')
                ->back()
                ->with('error', 'Falha ao fazer upload da imagem')
                ->withInput();



        $insert = $imagem->save($data);


        if ($insert) {
            return redirect()->back()->with('success', 'Imagem inserida com sucesso');
        } else {
            return redirect()->back()->with('error', 'Falha ao salvar o imagem...');
        }
    }

    public function destroy($id)
    {
        // Criando um objeto com o id recebido pela rota                
        $imagem = ImagemServico::destroy($id);

        // Excluindo este objeto
        //$usuario->delete();

        if ($imagem) {
            return redirect()->back()->with('success', 'Imagem removida com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Falha ao remover o imagem!');
        }
    }
}
