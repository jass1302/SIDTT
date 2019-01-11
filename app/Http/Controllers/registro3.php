<?php

namespace SIDTT\Http\Controllers;
use SIDTT\Http\Requests;
use SIDTT\Http\Requests\asesorCrear;
use \SIDTT\usuarios;
use \SIDTT\asesor;
use Session;
use Redirect;
use Iluminate\Http\Request;

class registro3 extends Controller
{
    public function store(asesorCrear $request)
    {
        $usuario = new usuarios();
        $asesor = new asesor();
        $usuario->tipo = $request->get('type');
        $usuario->nombre = $request->get('nombre');
        $usuario->ape_pat = $request->get('ape_pat');
        $usuario->ape_mat = $request->get('ape_mat');
        $usuario->email = $request->get('email');
        $usuario->password = bcrypt($request->get('password'));
        $usuario->firma_url = null;
        $usuario->save();

        $asesor->idUsuario = $usuario->idUsuario;
        $asesor->Proyecto_idProyecto = 1;
        $asesor->save();
        return view('index');  
    }
}
