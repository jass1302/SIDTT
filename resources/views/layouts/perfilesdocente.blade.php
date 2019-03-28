@extends('layouts.principal')
@section('content')
<div class="wrapper">
 <nav id="sidebar">
    <div class="sidebar-header">
      <div class="user-name">
    <h7 >docente</h7> <!--Max 21 caracteres-->
      </div>
    </div>

<ul id="panel" class="list-group list-group-horizontal">                 
                <li class="list-group-item "><a href="/logout" class=" material-icons" title="Cerrar Sesión"  >exit_to_app</a></li>
                <li class="list-group-item " ><a href="" class="material-icons " title="Calendario"  >calendar_today</a></li>
                <li class="list-group-item " ><a href="" class="material-icons " title="Notificaciones"  >notifications</a></li>
</ul>
<ul id="menuNav" class="list-unstyled components">
    <li>
        <a href="../administrador" class="list-group-item  " id="Home" >Home </a>
    </li>
    <li>
        <a href="../../administrador/curriculo" class="list-group-item  " id="Currículo" >Currículo</a>
    </li>
    <li>
        <a href="#Submenu" data-toggle="collapse" aria-expanded="false" class=" list-group-item" id="Titular">Titular</a>
                    <ul class="collapse list-unstyled" id="Submenu">
                        <li>
                           <a href="#Submenu1" data-toggle="collapse" aria-expanded="false" class=" list-group-item" id="Proyectos">Proyectos</a>
                    <ul class="collapse list-unstyled" id="Submenu1">
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

            </li>
             <li>
        <a href="" data-toggle="collapse" aria-expanded="false" class=" list-group-item" id="Asesor" onclick="mnu();">Asesor</a>
                    <ul class="collapse list-unstyled" id="Submenu2" >
                        <li>
                           <a href="#Submenu3" data-toggle="collapse" aria-expanded="false" class=" list-group-item" id="Proyectos">Proyectos</a>
                    <ul class="collapse list-unstyled" id="Submenu3">
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
            </li>
             <li>
        <a href="#Submenu4" data-toggle="collapse" aria-expanded="false" class=" list-group-item" id="Revisor">Revisor</a>
                    <ul class="collapse list-unstyled" id="Submenu4">
                        <li>
                           <a href="#Submenu5" data-toggle="collapse" aria-expanded="false" class=" list-group-item" id="Proyectos">Proyectos</a>
                    <ul class="collapse list-unstyled" id="Submenu5">
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
            </li>

        </ul>
</nav>
<script type="text/javascript">
     $("#Submenu2").hide();
    function mnu()
    {
        if($("#Submenu2").is(":hidden")==true)
        {
           $("#Submenu2").show(); 
       }else{
        $("#Submenu2").hide(); 
       }
       
    }
</script>

@stop