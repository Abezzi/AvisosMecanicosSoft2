<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\User;
use App\anuncio;
use App\categoria;
use App\imagen;


/**
 * Class HomeController
 * @package App\Http\Controllers
 */

class SugerenciaController extends Controller
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
    public function VerSugerencias(){
        return view('cliente.sugerencia-anuncio');
    }
  }
