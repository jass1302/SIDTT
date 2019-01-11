<?php

namespace SIDTT\Http\Controllers;

use \SIDTT\usuarios;
use \SIDTT\asesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class ctrlAdminAsesor extends Controller
{
     public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesor = usuarios::where('tipo','=','asesor')->get();
        return view('administrador.crud_Asesor.index',compact('asesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.crud_Asesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new usuarios();
        $asesor = new asesor();
        $usuario->tipo = $request->get('type');
        $usuario->nombre = $request->get('nombre');
        $usuario->ape_pat = $request->get('aPaterno');
        $usuario->ape_mat = $request->get('aMaterno');
        $usuario->email = $request->get('email');
        $usuario->password = bcrypt($request->get('password'));
        $usuario->firma_url = null;
        $usuario->save();

        $asesor->idUsuario = $usuario->idUsuario;
        $asesor->Proyecto_idProyecto = $request->get('project');
        $asesor->save();
        Session::flash('message','Asesor agregado correctamente.');
        return Redirect::to('administrador/asesores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesor = usuarios::find($id);
        return view('administrador.crud_Asesor.edit',['asesor'=>$asesor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        usuarios::find($id)->update([
            'nombre' => $request['nom'], 
            'aP' => $request['aP'],
            'aM' => $request['aM'],
            'email'=>$request['email'], 
            'pass'=> bcrypt($request['pass']),
            'cedula' => $request['cedula'],
            'telefono'=> $request['telefono'],
            'celular' => $request['celular']

        ]);
        Session::flash('message','Asesor actualizado correctamente.');
        return Redirect::to('administrador/asesores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        usuarios::find($id)->delete();
        Session::flash('message','El asesor ha sido deshabilitado.');
        return Redirect::to('administrador/asesores');
    }
}
