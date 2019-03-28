@extends('layouts.principal')
@section('content')
<div class="wrapper">
 <nav id="sidebar">
    <div class="sidebar-header">
      <div class="user-name">
    <h7 >Alumno</h7> <!--Max 21 caracteres-->
      </div>
    </div>

<ul id="panel" class="list-group list-group-horizontal">                 
                <li class="list-group-item "><a href="/logout" class=" material-icons" title="Cerrar Sesión"  >exit_to_app</a></li>
                <li class="list-group-item " ><a href="" class="material-icons " title="Calendario"  >calendar_today</a></li>
                <li class="list-group-item " ><a href="" class="material-icons " title="Notificaciones"  >notifications</a></li>
</ul>
<ul id="menuNav" class="list-unstyled components">
    <li>
        <a href="alumno" class="list-group-item  " id="Home" >Home </a>
    </li>
    <li>
        <a href="proyecto" class="list-group-item  " id="Proyecto" >Proyecto</a>
    </li>
    <li>
        <a href="docs_alu" class="list-group-item  " id="Documentos" >Documentos</a>
    </li>
    <li>
        <a href="eva_alu" class="list-group-item  " id="Evaluacion">Evaluación</a>
    </li>

</ul>

</nav>

<div id="content">
<button type="button" id="sidebarCollapse" class="btn">
<a id="menu" class=" material-icons" title="Cerrar">close</a>
</button>         
<div id="container">          
<div class="box">
@yield('contenido-perfil')
</div>
</div> 
</div>
</div>
@stop