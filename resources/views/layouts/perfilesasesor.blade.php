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
<a href="" class="list-group-item  "  id="curriculo" >Currículo </a>

<a href="pro_ase" class="list-group-item" id="proyectos">Proyectos</a>
<div id="proyecto_auto" >
	 <ul class="list-group-item" id="auto" >
<a href="pro_ase_vi" class="list-group-item-auto"  id="proyectoc">Proyecto</a>
<a href="ase_docs" class="list-group-item-auto" id="documentos">Documentos</a>
<a href="ase_eva" class="list-group-item-auto" id="evaluacion">Evaluación</a>
</ul>

</div>
<a href="" class="list-group-item  " id="calendario" >Calendario</a>
<a href="/logout" class="list-group-item material-icons"  >exit_to_app</a>
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