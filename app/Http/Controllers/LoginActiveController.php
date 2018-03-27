<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\BitacoraSesiones;
use App\Http\Requests\StoreLoginActive;
use Illuminate\Support\Facades\Session;

class LoginActiveController extends Controller
{
	public function index(){
		$users = Group::select('grupo','descripcion')->get();
		return view('login.acceso')->with('users',$users);
	}

	public function cerrar(){
		$bitacora = BitacoraSesiones::find(session('bisession'));
		$bitacora->delete();
		Session::flush();
		return redirect('/');
	}

    public function comprobar(Request $request){
		$usuario = $request->input("user");
		$pass = $request->input("password");
		$grupo = $request->input("grupo");
		if($usuario==''||$pass==''){
			$mensaje = "Usuario y contraseña requeridos";
			$users = Group::select('grupo','descripcion')->get();
			return view('login.acceso')->with('users',$users)->with('mensaje',$mensaje);
		}
		else{
			$mensaje = login($usuario,$pass,$grupo);
			switch ($mensaje) {
				case 0:
					$mensaje = "Usuario o contraseña inválidos";
					$users = Group::select('grupo','descripcion')->get();
					return view('login.acceso')->with('users',$users)->with('mensaje',$mensaje);
					break;
				case 1:
					$mensaje = "Sin permisos de grupo";
					$users = Group::select('grupo','descripcion')->get();
					return view('login.acceso')->with('users',$users)->with('mensaje',$mensaje);
					break;
				case 2:
					return redirect('predenuncias');
					break;
				case 3:
					$mensaje = "Solo personal autorizado";
					$users = Group::select('grupo','descripcion')->get();
					return view('login.acceso')->with('users',$users)->with('mensaje',$mensaje);
					break;
			}
		}
	}
}
