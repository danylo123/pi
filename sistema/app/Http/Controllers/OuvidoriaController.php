<?php

namespace App\Http\Controllers;

use App\Ouvidoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class OuvidoriaController extends Controller
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

    public function ouvidoria()
    {
        return view('ouvidoria/ouvidoria');
    }

    public function store(Request $request)
    {
        $ouvidoria = new Ouvidoria();

        $data = $request->all();

        $ouvidoria->assunto = Input::get('assunto');
        $ouvidoria->observacao = Input::get('observacao');
        $ouvidoria->user_id = Input::get('user_id');

        $insert = $ouvidoria->save($data);

        if ($insert) {
            return redirect()->route('ouvidoria')->with('success', 'Sua mensagem foi enviada, aguarde o retorno!');
        } else {
            return redirect()->back()->with('error', 'Falha ao enviar mensagem!');
        }
    }

    public function adm()
    {
        $ouvidoria = Ouvidoria::all();

        return view('ouvidoria/adm')->with('ouvidoria', $ouvidoria);
    }

    public function chamado(Request $request, $id)
    {
        $ouvidoria = Ouvidoria::where('id', $id)->get();

        return view('ouvidoria/chamado')->with('ouvidoria', $ouvidoria);
    }

    public function resposta(Request $request, $id)
    {
        $ouvidoria = Ouvidoria::where('user_id', $id)->get();

        return view('ouvidoria/chamado_resposta')->with('ouvidoria', $ouvidoria);
    }

    public function edit(Request $request)
    {
        $data['id'] = $request->id;
        $ouvidoria = Ouvidoria::find($data['id']);
        $data = $request->all();
        $data['resposta'] = $request->resposta;
        $data['estado'] = $request->estado;
        
        $update = $ouvidoria->update($data);
        

        if ($update) {
            return redirect()->route('ouvidoria/adm')->with('success', 'Chamado respondido com sucesso!');
        } else {
            return redirect()->route('ouvidoria/adm')->with('error', 'Falha ao responder chamado!');
        }

    }
}
