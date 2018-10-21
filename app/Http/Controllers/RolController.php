<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\rol_user;
use App\usuario;

class RolController extends Controller
{
    
    public function __construct(){
         $this->middleware('auth');
         
    }

    public function AdministradorRole($id){

    	$user = User::find($id);
    	$aux = 1;

    	$rolesUsuario = rol_user::where('user_id', $user->id)->get();

    	foreach ($rolesUsuario as $rol) {
    		if ($rol->role_id == $aux) {
    			$user->role = "1";	
    			$user->save();
    		}
    	}

    	return redirect('/home');

    }

    public function RevisorRole($id){

    	$user = User::find($id);
    	$aux = 2;

    	$rolesUsuario = rol_user::where('user_id', $user->id)->get();

    	foreach ($rolesUsuario as $rol) {
    		if ($rol->role_id == $aux) {
    			$user->role = "2";	
    			$user->save();
    		}
    	}

    	

    	return redirect('/home');

    }

    public function ClienteRole($id){

        $user = User::find($id);
        $aux = 3;

        $rolesUsuario = rol_user::where('user_id', $user->id)->get();

        foreach ($rolesUsuario as $rol) {
            if ($rol->role_id == $aux) {
                $user->role = "3";  
                $user->save();
            }
        }

        return redirect('/home');

    }


}
