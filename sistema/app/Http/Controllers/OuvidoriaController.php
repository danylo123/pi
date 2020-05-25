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
}
