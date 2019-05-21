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

  <div class="g-recaptcha right" data-theme="light" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;">
   	
   </div>

   <div class="form-group">
{!!Form::submit('Iniciar Sesión',['class'=>'btns'])!!}
</div>
 <div class="form-group mb-2">
    <a href="registro">Registrarme    </a> <a>|</a>
   <a  href="recuperacion_contraseña">Olvidé mi contraseña</a>
</div>
 
  </div>



{!!Form::close()!!}	


</div>
 </div>
</div>
 @stop