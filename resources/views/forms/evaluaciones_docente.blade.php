@extends('layouts.perfilesdocente')
<title>SIDTT - Docente</title>
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

       document.getElementById("evaluacion").className+=" active";
       document.getElementById("UA").className+=" active";
   
}
</script>
</script>
<div class="ven-title"> 
  <h7>Evaluaciones</h7>
</div>
<div id="ficha_proyect">
<table class="greyGridTable">
<tbody>

<tr>
<td colspan="4"> <p class=" h2">Evaluación de Seguimiento de Proyecto</p>  </td>
</tr>
<tr>
<td colspan="3"><p class=" h3">Primer Parcial</p></td><td> <div class="btns t120"><a class="material-icons">spellcheck</a> Evaluar</div></td>
</tr>
<tr>
<td colspan="3" ><p class=" h3">Segundo Parcial </p></td>
<td> <div class="btns t120"><a class="material-icons">spellcheck</a> Evaluar</div> </td>
</tr>
<tr>
<td colspan="3"><p class=" h2">Resúmen de  Evaluación Continua</p> </td>
<td><div class="btns t120"><a class="material-icons"> spellcheck</a> Evaluar</div></td>
</tr>
<tr>
<td colspan="3"><p class=" h2">Evaluación de Implamantación</p> </td>
<td><div class="btns t120"><a class="material-icons"> spellcheck</a> Evaluar</div></td>
</tr>
<tr>
<td colspan="3"><p class=" h2">Evaluacíon De Seguimiento de Presentación y Defensa Oral</p> </td>
<td><div class="btns t120"><a class="material-icons"> spellcheck</a> Evaluar</div></td>
</tr>
<!--TT2-->
<tr>
<td colspan="3"><p class=" h2">Evaluación de Reporte Final</p> </td>
<td><div class="btns t120"><a class="material-icons"> spellcheck</a> Evaluar</div></td>
</tr>
<tr>
<td colspan="3"><p class=" h2">Evaluacíon De Seguimiento de Presentación y Defensa Oral</p> </td>
<td><div class="btns t120"><a class="material-icons"> spellcheck</a> Evaluar</div></td>
</tr>


</tbody>
</table>
 
</div>
 
 
 @stop 