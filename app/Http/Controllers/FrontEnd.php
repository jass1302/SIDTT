<?php

namespace SIDTT\Http\Controllers;
use Illuminate\Http\Request;

class FrontEnd extends Controller
{
	public function __construct(){
		$this->middleware('auth',['except' => 'index']);
		$this->middleware('admin',['only' => 'administrador']);
		$this->middleware('al',['only' => 'alumno']);
		$this->middleware('asesor',['only' => 'asesor']);
		$this->middleware('docente',['only' => 'docente']);
		$this->middleware('homepage',['only' => 'index']);
	}
	public function index(){ 
		return view('index');  
	}
	public function administrador(){
		return view('administrador.bienvenido');
	}
	public function alumno(){
		return view('alumno.bienvenido');
	}
	public function docente(){
		return view('docente.bienvenido');
	}
	public function asesor(){
		return view('asesor.bienvenido');
	}
}  
