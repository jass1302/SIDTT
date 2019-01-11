@extends('layouts.perfilesalumno')
<title>SIDTT - Asesor</title>
@section('contenido-perfil')





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

       var lb= document.getElementById("evaluacion");
 lb.className+=" active";
   
}
</script>
<div class="ven-title"> 
  <h7>Evaluaciones</h7>
</div>
<table class="greyGridTable">
<tbody>
  <tr>
<td colspan="3"><p class=" h2">Revisión de Protocolo  </p> </td>
<td><div class="btns t45"><a class="material-icons"> send</a> Enviar</div></td>
</tr>
<tr>
<td colspan="4"> <p class=" h2">Evaluación de Seguimiento de Proyecto</p>  </td>
</tr>
<tr>
<td colspan="3"><p class=" h3">Primer Parcial</p></td><td> <div class="btns t45"><a class="material-icons"> send</a> Enviar</div></td>
</tr>
<tr>
<td colspan="3" ><p class=" h3">Segundo Parcial </p></td>
<td> <div class="btns t45"><a class="material-icons"> send</a> Enviar</div> </td>
</tr>
<tr>
<td colspan="3"><p class=" h2">Asesoramiento  </p> </td>
<td><div class="btns t45"><a class="material-icons"> send</a> Enviar</div></td>
</tr>
</tbody>
</table>
 

 
 
 @stop 