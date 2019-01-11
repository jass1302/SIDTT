<?php

namespace SIDTT\Http\Controllers;
use \SIDTT\usuarios;
use \SIDTT\alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ctrlAdminAlumno extends Controller
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
        $usuario = usuarios::withTrashed()->where('tipo','=','alumno')->join('alumnos','usuarios.idUsuario','=','alumnos.idUsuario')->select('usuarios.*','alumnos.*')->get();
        return view('administrador.crud_alumno.index',compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.crud_alumno.create');
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
        Session::flash('message','Alumno agregado correctamente.');
        return Redirect::to('administrador/alumnos');
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
        $usuario = usuarios::withTrashed()->where('tipo','=','alumno')->join('alumnos','usuarios.idUsuario','=','alumnos.idUsuario')->select('usuarios.*','alumnos.*')->find($id);
       return view('administrador.crud_alumno.edit',compact('usuario'));
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
        usuarios::find($id)->update(['nombre' => $request['nombre'], 'ape_pat' => $request['ape_pat'],'ape_mat' => $request['ape_pat'],]);
        $user = usuarios::find($id);
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        alumno::find($id)->update(['boleta'=>$request['boleta']]);

        Session::flash('message','Alumno actualizado correctamente.');
        return Redirect::to('administrador/alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp = usuarios::withTrashed()->find($id);
        if($temp->deleted_at == null){
        usuarios::find($id)->delete();
        alumno::find($id)->delete();
        Session::flash('message','El alumno ha sido deshabilitado.');
        }
        else{
        usuarios::withTrashed()->find($id)->restore();
        alumno::withTrashed()->find($id)->restore();
        Session::flash('message','El alumno ha sido habilitado.');   
        }
        return Redirect::to('administrador/alumnos');
    }
}
