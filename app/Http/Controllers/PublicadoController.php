<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\anuncio;
use Illuminate\Pagination\Paginator;


class PublicadoController extends Controller
{

	public function VerPublicados()
    {

    	$premium = DB::table('users')
            ->join('anuncio', 'users.id', '=', 'anuncio.id_usuario')
            ->where('users.tipo','=','premium' )
            ->where('anuncio.estado','=','PUBLICADO')
            ->select('anuncio.titulo','anuncio.descripcion','anuncio.imagen','anuncio.precio')
            ->orderBy('anuncio.id','DESC')
            ->paginate(6);

        $free = DB::table('users')
            ->join('anuncio', 'users.id', '=', 'anuncio.id_usuario')
            ->where('users.tipo','=','gratis' )
            ->where('anuncio.estado','=','PUBLICADO')
            ->select('anuncio.titulo','anuncio.descripcion','anuncio.imagen','anuncio.precio')
            ->orderBy('anuncio.id','DESC')
            ->paginate(6);    

        
        return view('vendor.adminlte.layouts.landing',compact('premium','free'));
    }
	
}
