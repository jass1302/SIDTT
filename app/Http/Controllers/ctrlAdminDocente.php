<?php

namespace SIDTT\Http\Controllers;
use \SIDTT\usuarios;
use \SIDTT\docente;
use \SIDTT\academia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ctrlAdminDocente extends Controller
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
        $usuario = usuarios::withTrashed()->where('tipo','=','docente')->join('docente','usuarios.idUsuario','=','docente.idUsuario')->join('academia','academia.idAcademia','=','docente.Academia_idAcademia')->select('usuarios.*','docente.*','academia.*')->get();
        $academia = academia::all();
        return view('administrador.crud_Docente.index',compact('usuario','academia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.crud_Docente.create');
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
        
    Session::flash('message','Docente agregado correctamente.');
    return Redirect::to('administrador/docentes');
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
        $usuario = usuarios::withTrashed()->where('tipo','=','docente')->join('docente','usuarios.idUsuario','=','docente.idUsuario')->select('usuarios.*','docente.*')->find($id);
        $academia = academia::pluck('Academia','idAcademia');
        return view('administrador.crud_Docente.edit',compact('usuario','doc','academia'));
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
            'nombre' => $request['nombre'], 
            'ape_pat' => $request['ape_pat'],
            'ape_mat' => $request['ape_pat'],]
        );
        $user = usuarios::find($id);
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        $docente =  usuarios::find($id);
        $docente->numerodet = $request->get('numerodet');
        $docente->Academia_idAcademia = $request->get('academia');
        $docente->save();

        Session::flash('message','Docente actualizado correctamente.');
        return Redirect::to('administrador/docentes');
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
        docente::find($id)->delete();
        Session::flash('message','El docente ha sido deshabilitado.');
        }
        else{
        usuarios::withTrashed()->find($id)->restore();
        docente::withTrashed()->find($id)->restore();
        Session::flash('message','El docente ha sido habilitado.');   
        }
        return Redirect::to('administrador/docentes');
    }
}
