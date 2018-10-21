<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaController extends Controller
{

	public function __construct(){
         $this->middleware('auth');
         
    }
    
	 public function Ayuda(){
	 	return view('vendor.adminlte.ayuda.home');
    }


}
