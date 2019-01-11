@extends('layouts.perfiles')
<title>Administrador - Asesor</title>
@section('contenido-perfil')
 <div class="ven-title"> 
    <h3>Modificar Asesor</h3>
  </div>
    {!!Form::model($asesor,['route'=>['admin.asesores.update',$asesor->id], 'method'=>'PUT'])!!}
     @include('forms.asesor')
     <div class="form-row">
     	<div class="form-group col-8">
      {!!Form::label('Telefono')!!}
	  {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Apellido Materno'])!!}
	  	</div>
	  	<div class="form-group col-4">
      {!!Form::label('Celular')!!}
			{!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'Celular'])!!}
			</div>
  </div>
  
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    {!!Form::model($asesor,['route'=>['admin.asesores.destroy',$asesor->id], 'method'=>'DELETE'])!!}
    {!!Form::submit('Deshabilitar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop