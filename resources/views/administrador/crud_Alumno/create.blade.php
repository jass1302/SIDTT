@extends('layouts.perfiles')
<title>Administrador - Alumno</title>
@section('contenido-perfil')
 <div class="ven-title"> 
    <h3>Añadir Alumno</h3>
 </div>
     {!!Form::open(['route'=>'admin.alumnos.store', 'method'=>'POST'])!!}
    @include('forms.alumno')
    {!!Form::submit('Añadir',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop