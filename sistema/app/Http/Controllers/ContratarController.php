<?php

namespace App\Http\Controllers;

use App\Contratar;
use App\servico;
use Illuminate\Http\Request;

class ContratarController extends Controller
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

    public function store(Request $request)
    {
        $servico = new Contratar();
        
        $data = $request->all();
        $servico->user_id = $request->user_id;
        $servico->servico_id = $request->servico_id;
        $servico->estado = "Pendente";
        $servico->observacao = "O proposta foi enviada para o autônomo.";
      
        $insert = $servico->save($data);
        if ($insert) {
            return redirect()->route('servico_todos')->with('success', 'Pedido enviado ao autonomo, aguarde um contato!');
        } else {
            return redirect()->back()->with('error', 'Falha ao contratar o serviço...');
        }
    }

    public function cadastroContrato($id)
    {
        $servico = servico::where("id", $id)->with('user')->get();
        return view('servico/contratar')->with('servico', $servico);
    }

    public function servicosContratados()    
    {
        $id = auth()->user()->id;
        $servico = Contratar::where("user_id", $id)->with('servico')->get();


        return view('servico/servico_contratado')->with('servico', $servico);
    }
}
