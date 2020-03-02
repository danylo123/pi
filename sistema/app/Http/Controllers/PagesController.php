<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function restrito()
    {
        return view('restrito');
    }

    public function sobre(int $id)
    {
        $eu = [
            'nome' => 'Danylo Alysson Dias de Aquino',
            'idade' => 24,
            'id' => $id
        ];

        return view('sobre', compact('eu'));
    }

    public function estruturaAdministrativa()
    {
        $row = [
            'nome' => 'Danylo',
            'cargo' => 'Cargo',
            'foto' => 'foto'
        ];
        return view('estrutura_administrativa/estruturaAdministrativa', compact('row'));
    }

    public function cadastroEstruturaAdministrativa()
    {
        return view('estrutura_administrativa/cadastro');
    }

    public function editarEstruturaAdministrativa($id)
    {
        return view('estrutura_administrativa/editar');
    }

    public function listarEstruturaAdministrativa()
    {
        return view('estrutura_administrativa/listar');
    }


    public function galeriaGme()
    {
        return view('galeria/gme');
    }

    public function galeriaMce()
    {
        return view('galeria/mce');
    }

    public function galeriaIcce()
    {
        return view('galeria/icce');
    }

    public function galeriaOfcExecutivos()
    {
        return view('galeria/ofcExecutivos');
    }

    public function cadastroGaleria()
    {
        return view('galeria/cadastro');
    }

    public function editarGaleria($id)
    {
        return view('galeria/editar');
    }

    public function listarGaleria()
    {
        return view('galeria/listar');
    }

    public function transparenciaGce()
    {
        return view('transparencia/gce');
    }

    public function transparenciaAdace()
    {
        return view('transparencia/adace');
    }

    public function documentoAdace()
    {
        return view('documento/adace');
    }

    public function documentoGe()
    {
        return view('documento/ge');
    }

    public function documentoIcce()
    {
        return view('documento/icce');
    }

    public function documentoGce()
    {
        return view('documento/gce');
    }

    public function midia()
    {
        return view('midia/midia');
    }

    public function videoAula()
    {
        return view('video_aula/videoAula');
    }

    public function ouvidoria()
    {
        return view('ouvidoria/ouvidoria');
    }

    public function cadastroUsuario()
    {
        return view('usuario/cadastro');
    }

    public function editarUsuario($id)
    {
        return view('usuario/editar');
    }

    public function listarUsuario()
    {
        return view('usuario/listar');
    }
}
