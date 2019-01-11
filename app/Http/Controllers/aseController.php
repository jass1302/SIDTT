<?php

namespace SIDTT\Http\Controllers;

use Illuminate\Http\Request;

class aseController extends Controller
{
    public function documentos(){
    	return view('asesor.documentos.index');
    }

    public function proyectos(){
    	return view('asesor.proyecto.index');
    }
}
