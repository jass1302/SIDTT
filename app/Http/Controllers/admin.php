<?php

namespace SIDTT\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    //
    public function welcome(){
    	return view('administrador.bienvenido');
    }

    public function Alumno(){
    	return view('administrador.admn_crud_alumno');
    }
}
