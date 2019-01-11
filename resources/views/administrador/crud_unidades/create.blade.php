@extends('layouts.perfiles')
<title>Administrador - Unidades</title>
@section('contenido-perfil')
 <div class="ven-title"> 
    <h3>Añadir Unidad</h3>
 </div>
    {!!Form::open(['route'=>'admin.unidades.store', 'method'=>'POST'])!!}
   @include('forms.unidades')
   {!!Form::submit('Aceptar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop