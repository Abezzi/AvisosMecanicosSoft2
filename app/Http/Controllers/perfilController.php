<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\rol_user;
use App\foto_usuario;

class perfilController extends Controller
{
	public function __construct(){
         $this->middleware('auth');
         
    }
    
	public function index($id){

		$usuario = usuario::find($id);
		$roles = rol_user::where('user_id', $id)->get();


		return view('vendor.adminlte.usuarios.home', compact('roles'));

	}

	public function foto($id, Request $request){

		$usuario2 = usuario::find($id);

		if($request->hasFile('file')){

			$filename = $request->file->getClientOriginalName();
			$request->file->storeAs('public/upload', $filename);
			$usuario2->foto = $filename;
			$usuario2->save();	
		}	

		return redirect('/home');


	}

}
