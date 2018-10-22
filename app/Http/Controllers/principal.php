<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\anuncio;
use App\categoria;
use App\imagen;


class principal extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
     public function PublicarAnuncioAceptado(){

        $anuncio = anuncio::where('estado', '=', 'PUBLICADO')->paginate(6);
        return view('cliente.inicio-anuncio',compact('categoria'));
    }

}
