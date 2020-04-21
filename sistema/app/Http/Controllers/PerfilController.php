<?php

namespace App\Http\Controllers;

use App\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

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

        $user = auth()->user();

        $data = $resquest->all();

        $data['imagem'] = $user->imagem;

        if ($resquest->hasFile('imagem') && $resquest->file('imagem')->isValid()) {
            if ($user->imagem) {
                $name = $user->imagem;
            } else {
                $name = $user->id . kebab_case($user->name);
            }

            $extenstion = $resquest->imagem->extension();
            $nameFile = "{$name}.{$extenstion}";

            $data['imagem'] = $nameFile;

            $upload = $resquest->imagem->storeAs('users', $nameFile);

            if (!$upload) {
                return redirect()->back()->with('error', 'Falha ao realizar upload da imagem');
            }
        }

        $cpf = $data['cpf'];
        $cpf = trim($cpf);
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace("-", "", $cpf);
        $data['cpf'] = $cpf;

        $telefone = $data['telefone'];
        $telefone = trim($telefone);
        $telefone = str_replace("(", "", $telefone);
        $telefone = str_replace(")", "", $telefone);
        $telefone = str_replace("-", "", $telefone);
        $telefone = str_replace(" ", "", $telefone);
        $data['telefone'] = $telefone;

        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $update = auth()->user()->update($data);

        if ($update) {
            return redirect()->route('perfil')->with('success', 'Sucesso ao atualizar');
        } else {
            return redirect()->back()->with('error', 'Falha ao atualizar o perfil...');
        }
    }
}
