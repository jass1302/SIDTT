@extends('layouts.principal')
<div hidden></div>
@section('content')
<div class="wrapped">
<div class="contreg">
 <div class="box">
 <div class="title"> 
	<h4 >Nueva Contraseña</h4>
</div>
{!!Form::open(['route'=>'login.store','method'=>'POST'])!!}
<div class="form-group">
{!!Form::label('Nueva contraseña:')!!}</div>
<div class="form-group">
{!!Form::password('newpass',null,['placeholder'=>'Ingrese su nueva contraseña','class'=>'form-control '])!!}</div>
<div class="form-group">
{!!Form::label('Confirmar nueva contraseña:')!!}</div>
<div class="form-group">
{!!Form::password('confnewpass',null,['placeholder'=>'Confirme su nueva contraseña','class'=>'form-control '])!!}</div>
{!!Form::submit('Aceptar',['class'=>'btns'])!!}
</div>
</div>

</div>

 @stop