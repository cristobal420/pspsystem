<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function menuPrincipal()
    {
        return view('admin/menu');
    }

    public function agregarAlumno()
    {
        return view('admin/agregar_alumno');
    }

}
