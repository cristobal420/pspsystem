<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
	public function Acceso()
	{
		return view('login');
	}

	public function LogIn (Request $request)
	{
		$datos = $this->validate(request(),[
			'email' => 'email|required|string',
			'password' => 'required|string',
		]);

		// return $datos;
		if(Auth::guard('profesores')->attempt($datos)){
			return view('admin.menu');
		}else{
			return back()
			->withErrors([
				'email'=>'Vuelve a ingresar tu email',
				'password'=>'Vuelve a ingresar tu contraseña',
			])
			->withInput(request(['email']));
		}

	}
}
