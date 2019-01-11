@extends('layouts.perfilesalumno')
<title>Alumno - Proyecto</title>

@section('contenido-perfil')
<div class="form-row">
	<div class="form-group col-md-2">
		{!!Form::label('Nombre del proyecto')!!}
		{!!Form::text('proyecto',null,['class'=>'form-control-plaintext','placeholder'=>'Nombre del proyecto'])!!}
	</div>
	<div class="form-group col-md-6">
		{!!Form::label('Unidad de Aprendizaje')!!}
		{!!Form::text('codigo',null,['class'=>'form-control-plaintext','placeholder'=>'Ingrese codigo de vinculacion'])!!}
	</div>
</div>
@stop