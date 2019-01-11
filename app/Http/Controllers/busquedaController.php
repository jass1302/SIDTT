<?php

namespace SIDTT\Http\Controllers;
use \SIDTT\usuarios;
use \SIDTT\alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class busquedaController extends Controller
{
    public function search(Request $request){
    	$usuario = usuarios::withTrashed()->where('nombre','LIKE','%'.$request->buscar.'%')->get();
    	$alumno = alumno::withTrashed();
    	return view('administrador.crud_alumno.index',compact('usuario','alumno'));
    }
}
