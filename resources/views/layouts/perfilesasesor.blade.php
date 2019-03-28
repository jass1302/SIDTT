@extends('layouts.principal')
@section('content')
<div class="wrapper">
 <nav id="sidebar">
    <div class="sidebar-header">
      <div class="user-name">
    <h7 >Asesor</h7> <!--Max 21 caracteres-->
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
        <a href="proyecto" class="list-group-item  " id="Currículo" >Currículo</a>
    </li>
    <li>
        <a href="#Submenu" data-toggle="collapse" aria-expanded="false" class=" list-group-item" id="Unidades">Proyectos</a>
                    <ul class="collapse list-unstyled" id="Submenu">
                        <li>
                            <a href="#" class="list-group-item sub" name="Proyectos">Proyecto</a>
                        </li>
                
                        <li>
                            <a href="#" class="list-group-item sub" name="Documentos">Documentos</a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item sub" name="Evaluación">Evaluación</a>
                        </li>
                    </ul>
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

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" ></script>
 
</div>
@stop