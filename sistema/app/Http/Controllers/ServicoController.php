<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\servico;

class ServicoController extends Controller
{
    public function cadastroServico()
    {
        return view('servico/cadastro');
    }

    public function editarServico($id)
    {
        return view('servico/editar');
    }

    public function listarServico()
    {
        // Busca todos os dados do banco de dados
        $servico = Servico::all();

        // Chama a view listar e envia os dados buscados
        return view('servico/listar')->with('servico', $servico);
    }
}
