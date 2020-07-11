<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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

    public function index()
    {
        return view('welcome');
    }

    public function ouvidoria()
    {
        return view('ouvidoria/ouvidoria');
    }

    public function duvidas()
    {
        return view('duvidas_frequentes/duvidas');
    }

    public function Logout()
    {
        auth()->logout();

        session()->flash('message', 'Até logo!');

        return redirect('/login');
    }
}
