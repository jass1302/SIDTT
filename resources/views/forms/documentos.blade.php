@extends('layouts.perfilesalumno')
<title>Administrador - Alumno</title>
@section('contenido-perfil')

{!!Html::style('vendor/css/superposiciondivs.css')!!}



 @if(Session::has('message'))
  <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {{Session::get('message')}}
  </div>
  @endif
<script type="text/javascript">
function Menu(){ 

       var lo= document.getElementById("proyecto");
 lo.className+=" active";
   
}
</script>
<div class="ven-title"> 
  <h7>Documentos</h7>
</div>

  <table id="table-scroll-docs">

<tbody id="tbody" class="t400-h">
  <tr>
    <td class="t35">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>
<a class="material-icons white"  title="Editar"> edit</a>
<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>
 <td class="t35">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>
<a class="material-icons white"  title="Editar"> edit</a>
<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>
     <td class="t30">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>

<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>
     </tr>
  <tr>
   <td class="t35">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>

<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>
       <td class="t35">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>

<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>
     <td class="t30">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>

<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>

  </tr>
  <tr>
     <td class="t35">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>

<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>
    <td class="t35">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>

<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>
    <td class="t30">
      <i class="material-icons md-130 white">
insert_drive_file</i><br>
<label>Nombre del Documento</label><br>

<a class="material-icons white" title="Visualizar"> 
remove_red_eye</a>
    </td>
</tr>
  </tbody>
</table>

 @stop 