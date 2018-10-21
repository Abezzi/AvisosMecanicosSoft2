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

class AnunciosController extends Controller
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

    public function PublicarAnuncios(){

        $categoria = categoria::all();
        $user = \Auth::user();

        return view('cliente.publicar-anuncio',compact('categoria'));
    }

    public function PostPublicarAnuncios(Request $request){ //TODO0001
        $st = new anuncio;
        $st->id_usuario = \Auth::user()->id;
        $st->id_categoria = $request->id_categoria;
        $st->titulo = $request->titulo;
        $st->descripcion = $request->descripcion;
        $st->precio = $request->precio;
        $st->estado = "SINPUBLICAR";
        $st->region = $request->region;
        $st->comuna = $request->comuna;
        $st->imagen = "imagen.png"; //sacar despues
        $st->save();
        return redirect('home');
        
        if ($request->hasFile('file') ) {
            foreach ($request->file as $file) {
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $file->storeAs('public/imagenes', $filename);
                $st->imagen = $filename;
            }
            
            // return 'yes';
        }
        return redirect('cliente/anuncios/publicar');
    }

    public function VerAnuncios(){
        $user = \Auth::user();
        $anuncio = anuncio::where('id_usuario', '=', $user->id)->paginate(6); 
        return view('cliente.ver-anuncio',compact('anuncio'));
    }

    public function VerAllAnuncio(){
        $anuncio = anuncio::where('estado','=','SINPUBLICAR')->paginate(6); 
        return view('revisor.VerAllAnuncio',compact('anuncio'));
    }

    public function RevisarAnuncio($id){
        $anuncio = anuncio::find($id); 
        return view('revisor.RevisarAnuncio',compact('anuncio'));
    }
    
    public function PostRevisarAnuncios(Request $request,$id){
        $anuncio = anuncio::find($id);

        $anuncio->estado = $request->estado;

        $anuncio->save();


        return redirect('revisor/anuncios/ver');
    }

/*
    public function ContarAnuncios($region){
        $cantidad = anuncio::where('region', '=', $region); 
        return view('admin.crear-informe-aceptado',compact('cantidad'));
    }

*/
}