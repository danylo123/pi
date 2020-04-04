<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
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

    public function perfil()
    {
        return view('perfil/editar');
    }

    public function perfilEditar(Request $resquest)
    {
        $data = $resquest->all();

        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        if ($data['imagem'] != null) {           
            $temp = $data['imagem']->getClientOriginalName();
            $blob = base64_encode($temp);
            $data['imagem'] = $blob;
            $extension = $resquest->imagem->getMimeType();
            $data['extensaoImagem'] = $extension;
        } else {
            unset($data['imagem']);
        }


        $update = auth()->user()->update($data);

        if ($update) {
            return redirect()->route('perfil')->with('success', 'Sucesso ao atualizar');
        } else {
            return redirect()->back()->with('error', 'Falha ao atualizar o perfil...');
        }
    }
}
