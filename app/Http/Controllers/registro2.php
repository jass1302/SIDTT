<?php

namespace SIDTT\Http\Controllers;
use SIDTT\Http\Requests;
use SIDTT\Http\Requests\doncenteCrear;
use \SIDTT\usuarios;
use \SIDTT\docente;
use Session;
use Redirect;
use Iluminate\Http\Request;

class registro2 extends Controller
{
    public function store(doncenteCrear $request)
    {
        $usuario = new usuarios();
        $docente = new docente();
        $usuario->tipo = $request->get('type');
        $usuario->nombre = $request->get('nombre');
        $usuario->ape_pat = $request->get('ape_pat');
        $usuario->ape_mat = $request->get('ape_mat');
        $usuario->email = $request->get('email');
        $usuario->password = bcrypt($request->get('password'));
        $usuario->firma_url = null;
        $usuario->save();
        $docente->idUsuario = $usuario->idUsuario;
        $docente->numerodet = $request->get('numerodet');
        $docente->Academia_idAcademia = $request->get('academia');
        $docente->curriculum_idCurriculum = null;
        $docente->save();
        return view('index');
    }
}
