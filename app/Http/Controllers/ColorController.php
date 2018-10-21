<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ColorController extends Controller
{

    public function __construct(){
         $this->middleware('auth');
         
    }
 

    public function Azul($id){

    	$user = User::find($id);
    	$user->color = "skin-blue ";	
    	$user->save();

    	return redirect('/home');

    }

    public function Negro($id){

    	$user = User::find($id);
    	$user->color = "skin-black";	
    	$user->save();

    	return redirect('/home');

    }

    public function Morado($id){

        $user = User::find($id);
    	$user->color = "skin-purple";	
    	$user->save();

    	return redirect('/home');

    }

    public function Verde($id){

    	$user = User::find($id);
    	$user->color = "skin-green";	
    	$user->save();

    	return redirect('/home');

    }

    public function Rojo($id){

    	$user = User::find($id);
    	$user->color = "skin-red";	
    	$user->save();

    	return redirect('/home');

    }


 	public function Amarillo($id){

    	$user = User::find($id);
    	$user->color = "skin-yellow";	
    	$user->save();

    	return redirect('/home');

    }


}
