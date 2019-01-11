<?php

namespace SIDTT\Http\Controllers;
use SIDTT\Http\Requests;
use SIDTT\Http\Requests\alumnoCrear;
use \SIDTT\usuarios;
use \SIDTT\alumno;
use \SIDTT\academia;
use Session;
use Redirect;
use Iluminate\Http\Request;
class registro extends Controller
{
    // Controlador de enrrutamiento de vistas de registro
	public function index(){
        return view('registro.registro');
    } 

    // Enrrutamiento a los formularios de registro
    public function almn(){
        return view('registro.registroAlumno');
    }
    public function doce(){
        $academia = academia::pluck('Academia','idAcademia');
        return view('registro.registroDocente',compact('academia'));
    }
    public function ext(){
        return view('registro.registroAsesor');
    }

    // Funciones de registro
    public function store(alumnoCrear $request)
    {
        $usuario = new usuarios();
        $alumno = new alumno();
        $usuario->tipo = $request->get('type');
        $usuario->nombre = $request->get('nombre');
        $usuario->ape_pat = $request->get('ape_pat');
        $usuario->ape_mat = $request->get('ape_pat');
        $usuario->email = $request->get('email');
        $usuario->password = bcrypt($request->get('password'));
        $usuario->save();
        $alumno->idUsuario = $usuario->idUsuario;
        $alumno->boleta = $request->get('boleta');
        $alumno->save();
        Session::flash('message','Registro exitoso');
        return view('index');
    }
}
