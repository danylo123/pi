<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
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

    public function endereco(Request $resquest)
    {
        $endereco= Endereco::all();
        $endereco = Endereco::where("user_id", auth()->user()->id)->get();

        return view('perfil/endereco')->with('endereco', $endereco);
    }

    public function store(Request $resquest)
    {
        $endereco = new Endereco();

        $data = $resquest->all();

        $data['rua'] = $resquest->rua;
        $data['numero'] = $resquest->numero;
        $data['bairro'] = $resquest->bairro;
        $data['cidade'] = $resquest->cidade;
        $data['estado'] = $resquest->estado;
        $data['user_id'] = $resquest->user_id;


        $insert = $endereco->save($data);


        if ($insert) {
            return redirect()->route('perfil/endereco')->with('success', 'Endereço cadastrado com sucesso');
        } else {
            return redirect()->back()->with('error', 'Falha ao cadastrar o endereço...');
        }
    }
}
