<?php

namespace SIDTT\Http\Controllers;
use \SIDTT\usuarios;
use \SIDTT\unidades;
use \SIDTT\docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use \Carbon\Carbon;
class ctrlAdminUnidades extends Controller
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
        $uni = unidades::withTrashed()->get();
        $docentes = usuarios::select(DB::raw("CONCAT(nombre,' ',ape_pat,' ',ape_mat) AS nombre"),'idUsuario','tipo')->where('tipo','=','docente')->orderBy('nombre')->pluck('nombre','idUsuario');
       return view('administrador.crud_unidades.index',compact('uni','docentes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = usuarios::select(DB::raw("CONCAT(nombre,' ',ape_pat,' ',ape_mat) AS nombre"),'idUsuario','tipo')->where('tipo','=','docente')->orderBy('nombre')->pluck('nombre','idUsuario');
        return view('administrador.crud_unidades.create',compact('docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        unidades::create([
            'unidad' => $request['unidad'],
            'd_titular' => $request['d_titular'],
            'grupo' => $request['grupo'],
            'periodo' => $request['periodo']
        ]);
        Session::flash('message','Unidad agregada correctamente.');
        return Redirect::to('administrador/unidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uni = unidades::find($id);
       // $docentes = usuarios::where('tipo','=','docente')->orderBy('nombre')->pluck('nCompleto','_id');
        $usuarios = usuarios::all();
        $docentes = docente::find($usuarios->idUsuario)->orderBy('nombre')->pluck('nombre','idUsuario');
        return view('administrador.crud_unidades.edit',compact('uni','docentes'));
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
        unidades::find($id)->update([
            'unidad' => $request['unidad'],
            'd_titular' => $request['d_titular'],
            'grupo' => $request['grupo'],
            'periodo' => $request['periodo']
        ]);

        Session::flash('message','Unidad actualizada correctamente.');
        return Redirect::to('administrador/unidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        unidades::find($id)->delete();
        Session::flash('message','La unidad ha sido deshabilitada.');
        return Redirect::to('administrador/unidades');
    }
}
