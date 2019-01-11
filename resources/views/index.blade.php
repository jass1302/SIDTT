@extends('layouts.principal')
<div hidden></div>

@section('content')
<head>
	<title>SIDTT - Iniciar Sesión</title>
</head>

 	@include('alerts.errors')
	<div class="wrapped">
<div class="contlogin">
<div class="box">
	{!!Form::open(['route'=>'login.store','method'=>'POST'])!!}
<div class="title"> 
	<h7 >Inicio de Sesión</h7>
</div>
<div class="form-group">
{!!Form::label('Correo electrónico:')!!}</div>
<div class="form-group">
{!!Form::email('email',null,['placeholder'=>'Ingresa tu correo electrónico','class'=>'form-control '])!!}</div>
<div class="form-group">
{!!Form::label('Contraseña:')!!}</div>
<div class="form-group">
{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}</div>
{!!Form::submit('Iniciar Sesión',['class'=>'btns'])!!}<br><br>

<div class="form-group">
<a href="registro">Registrarme</a></div>
<div class="form-group">
<a  href="pruebas">Olvidé mi contraseña</a>
{!!Form::close()!!}	
</div>

</div>
 </div>
</div>
 @stop