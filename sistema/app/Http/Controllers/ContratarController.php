<?php

namespace App\Http\Controllers;

use App\Chat;
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

    public function contratos()
    {
        $servico = servico::where('user_id', auth()->user()->id)->get();

        $contrato = Contratar::with('servico')->with('chat')->get();

        return view('servico/contratos')->with('contrato', $contrato);
    }

    public function cancelar(Request $request)
    {
        $data = $request->all();
        $contrato = Contratar::find($request->id);
        $update = $contrato->update($data);

        if ($update) {
            return redirect()->route('contratos')->with('success', 'O contrato foi cancelado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Falha ao cancelar o contrato!');
        }
    }

    public function aceitar(Request $request)
    {
        $data = $request->all();
        $contrato = Contratar::find($request->id);
        $update = $contrato->update($data);

        if ($update) {
            return redirect()->route('contratos')->with('success', 'O contrato foi aceitao com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Falha ao aceitar o contrato...');
        }
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
        $servico = Contratar::where("user_id", $id)->with('servico')->with('chat')->get();
        
        return view('servico/servico_contratado')->with('servico', $servico);
    }
}
