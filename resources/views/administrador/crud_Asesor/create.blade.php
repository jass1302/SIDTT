@extends('layouts.perfiles')
<title>Administrador - Alumno</title>
@section('contenido-perfil')
 <div class="ven-title"> 
    <h3>Añadir Asesor</h3>
     </div>
     {!!Form::open(['route'=>'admin.asesores.store', 'method'=>'POST'])!!}
    @include('forms.asesor')
    {!!Form::submit('Añadir',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop