<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Contratar;
use Error;
use ErrorException;
use Illuminate\Http\Request;

class ChatController extends Controller
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
        $chat = new Chat();

        $data = $request->all();
        $chat->user_id = $request->user_id;
        $chat->contratar_id = $request->contratar_id;
        $chat->mensagem = $request->mensagem;

        $insert = $chat->save($data);
        if ($insert) {
            return redirect('chat/' . $chat->contratar_id . '/servico');
        } else {
            return redirect()->back()->with('error', 'Falha ao enviar mensagem!');
        }
    }

    public function chat(Request $request, $id)
    {
        $chat = Chat::where('contratar_id', $id)->get();

        foreach ($chat as $cid) {
            $user_id = $cid->user_id;
            
            if (auth()->user()->id == $user_id) {
                $visto = Chat::where('contratar_id', $id)->update(['visto' => 1]);
            }else{
                //
            }
        }
        $contrato = Contratar::where('id', $id)->get();


        return view('chat/chat')->with('chat', $chat)->with('contrato', $contrato);
    }
}
