<?php

namespace App\Http\Controllers;

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

    public function cadastroContrato($id)
    {
        $servico = servico::all();
        $servico = servico::find($id);
        $servico = servico::where("id", $id)->with('user')->get();


        return view('servico/contratar')->with('servico', $servico);
    }
}
