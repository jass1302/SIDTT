@extends('layouts.principal')
@section('content')
<div class="wrapper">
 <nav id="sidebar">
    <div class="sidebar-header">
      <div class="user-name">
    <h7 >{!!Auth::user()->nombre!!}</h7> <!--Max 21 caracteres-->
      </div>
    </div>

<ul id="panel" class="list-group list-group-horizontal">                 
                <li class="list-group-item "><a href="/logout" class=" material-icons" title="Cerrar Sesión"  >exit_to_app</a></li>
                <li class="list-group-item " ><a href="" class="material-icons " title="Notificaciones"  >notifications</a></li>
</ul>
<ul id="menuNav" class="list-unstyled components">
    <li>
        <a href="administrador" class="list-group-item  " id="home" >Home </a>
    </li>
    <li>
        <a href="unidades" class="list-group-item  " id="Unidades" >Unidades</a>
    </li>
    <li>
        <a href="docentes" class="list-group-item  " id="Docentes" >Docentes</a>
    </li>
    <li>
        <a href="asesores" class="list-group-item  " id="Asesores" >Asesores Externos</a>
    </li>
    <li>
        <a href="alumnos" class="list-group-item " id="Alumnos" >Alumnos</a>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');

                 document.getElementById("menu").innerHTML = "menu";
                document.getElementById("menu").title="Menu"   
          }); 
            
        });
    </script>
</div>
@stop