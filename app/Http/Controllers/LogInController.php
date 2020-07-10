<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
	public function LogIn ()
	{
		return view('login');
	}
}
