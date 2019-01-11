@extends('layouts.principal')
@section('content')
<div class="pefilContenedor">

<div class="perfil-layout-leftbar-back">
	<div class="user-name"> 
	<h7>{!!Auth::user()->nombre!!}</h7>
</div>
<div class="perfil-layout-leftbar">

<ul class="list-group">
	
<a href="" class="list-group-item  " id="home" >HOME 
			<!--EXPONES NOTIFICACIONES<span class="badge">12</span>--> </a>
<a href="" class="list-group-item  " id="proyecto" >Proyecto </a>
	
<a href="" class="list-group-item " id="documentos" >Documentos</a>

<a href="" class="list-group-item  " id="calendario" >Calendario</a>
<a href="" class="list-group-item  " id="evaluacion" >Evaluación</a>
<a href="/logout" class="list-group-item material-icons"  title="Cerrar Sesión" >exit_to_app</a>
</ul>
</div>
</div>
<div class="perfil-layout-content">

 <div class="login-cont"></div>
 
  <div class="cont-text">
	@yield('contenido-perfil')
</div>
	
</div>
</div>
@stop