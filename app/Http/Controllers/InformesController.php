<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use App\Http\User;
use App\Http\Role;
use App\Http\rol_user;
use App\anuncio;
use App\categoria;
use App\imagen;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */

class InformesController extends Controller
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

    public function MostrarInformeAvisosRechazados()
    {
        return view('admin.crear-informe-rechazado');
    }

    public function MostrarInformeAvisosAceptados()
    {
        /*
        $aceptados_por_region = DB::table('anuncio')
            ->select(DB::raw('count(*) as anuncio_publicado'))
            ->where([
                ['estado', '=', 'SINPUBLICAR'],
                ['region', '=', 13]
            ])
            ->get();
        $aceptados_por_region = 123;
        */

        $array = array();

        $array[] = 'hola';
        $array[] = 'chao';

        

        return view('admin.crear-informe-aceptado', $array);
    }

    public function MostrarInformeAvisosTotal()
    {
        return view('admin.crear-informe-total-avisos');
    }

    public function MostrarInformeAvisosPersonalizado()
    {
        return view('admin.crear-informe-personalizado');
    }

    public function ContarAnunciosAceptados(){
        /*$aceptados_por_region = DB::table('anuncio')
            ->select(DB::raw('count(*) as anuncio_publicado'))
            ->where([
                ['estado', '=', 'SINPUBLICAR'],
                ['region', '=', $region]
            ])
            ->get();
        */

        return view('layouts.main-content-avisos-aceptados')->with('name', 'San Juan Vacation');
        //return view('admin.crear-informe-aceptado')->with('name', 'San Juan Vacation');
    }

}