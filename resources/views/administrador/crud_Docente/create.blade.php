@extends('layouts.perfiles')
<title>Administrador - Docente</title>
@section('contenido-perfil')
 <div class="ven-title"> 
    <h3>Añadir Docente</h3>
 </div>
     {!!Form::open(['route'=>'admin.docentes.store', 'method'=>'POST'])!!}
    @include('forms.docente')
    {!!Form::submit('Añadir',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop