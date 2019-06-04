@extends('layouts.perfiles')
<title>Administrador - Cambiar contraseña</title>
@section('contenido-perfil')
	
	{!!Form::open(['route'=>'passguord.store', 'method'=>'POST'])!!}

<div class="form-row">
    <div class="form-group col-md-6">
      {!!Form::label('Contraseña actual')!!}
      {!!Form::password('currpass',['class'=>'form-control','placeholder'=>'Contraseña actual'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      {!!Form::label('Nueva contraseña')!!}
      {!!Form::password('nwpass',['class'=>'form-control','placeholder'=>'Nueva contraseña'])!!}
    </div>
    <div class="form-group col-md-6">
      {!!Form::label('Confirmar contraseña')!!}
     {!!Form::password('c_nwpass',['class'=>'form-control','placeholder'=>'Confirmar contraseña'])!!}
    </div>
</div>
<div class="form-row">
<div class=" col-8">
    
</div>
<div class=" col-4">
	{!!Form::submit('Cambiar',['class'=>'btn'])!!}
</div>
 	</div>
{!!Form::close()!!}


@stop