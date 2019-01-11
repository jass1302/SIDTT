@extends('layouts.perfiles')
<title>Administrador - Docente</title>
@section('contenido-perfil')
 <div class="ven-title"> 
    <h3>Modificar Docente</h3>
  </div>
    {!!Form::model($usuario,['route'=>['admin.docentes.update',$usuario->id], 'method'=>'PUT'])!!}
     @include('forms.docente')
     <div class="form-row">
     	<div class="form-group col-8">
      {!!Form::label('Telefono')!!}
	  {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
	  	</div>
	  	<div class="form-group col-4">
      {!!Form::label('Celular')!!}
			{!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'Celular'])!!}
			</div>
  </div>
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    {!!Form::model($usuario,['route'=>['admin.docentes.destroy',$usuario->idUsuario], 'method'=>'DELETE'])!!}
    @if($usuario->deleted_at == null)
    {!!Form::submit('Deshabilitar',['class'=>'btn btn-primary'])!!}
    @else
    {!!Form::submit('Habilitar',['class'=>'btn btn-primary'])!!}
    @endif
    {!!Form::close()!!}
@stop