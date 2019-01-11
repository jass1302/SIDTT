@extends('layouts.principal')
@section('content')


<div class="pefilContenedor">

<div class="perfil-layout-leftbar-back">
	<div class="user-name"> 
	<h7>{!!Auth::user()->nombre!!}</h7>
</div>

<div class="perfil-layout-leftbar">
<ul class="list-group">
	<a href="docente" class="list-group-item  " id="home" >HOME </a>
	<div id="proyecto_x" >

			 
<a href="" class="list-group-item  "  id="curriculo" >Currículo </a>

<a  class="list-group-item" id="UA" disabled >Unidad de Aprendizaje</a>

<ul class="list-group-item" id="auto" >
<a href="doce_sol" class="list-group-item-auto"  id="alumnos">Alumnos</a>
<a href="doc_proys" class="list-group-item-auto"  id="proyectos">Proyectos</a>
<a href="pro_doce" class="list-group-item-auto"  id="proyecto">Proyecto</a>
<a href="doc_docs" class="list-group-item-auto" id="documentos">Documentos</a>
<a href="doc_eva" class="list-group-item-auto" id="evaluacion">Evaluación</a>
</ul>

<a  class="list-group-item" id="asesor" disabled >Asesor</a>


@include('forms.menuauto')


<a  class="list-group-item" id="revisor" disabled >Revisor</a>


@include('forms.menuauto')


<a href="" class="list-group-item  " id="calendario"disabled >Calendario</a>
</div>
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