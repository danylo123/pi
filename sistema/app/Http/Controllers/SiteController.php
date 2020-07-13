<?php

namespace App\Http\Controllers;

use App\servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SiteController extends Controller
{
    public function site()
    {
        return view('website/site');
    }

    public function pesquisar()
    {
        // Busca todos os dados do banco de dados pelo id do usuário
        $servico = servico::all();


        return view('website/pesquisar')->with('servico', $servico);
    }

    public function search(Request $request)
    {
        $busca = Input::get('txt');
        $servico = servico::where('nome', 'like', '%'.$busca.'%')->get();

        return view('website/pesquisar')->with('servico', $servico)->with('busca', $busca);
    }
}
