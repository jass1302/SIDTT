@extends('layouts.perfilesalumno')
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
<input id="PageN" type="hidden" name="Proyecto">
<input id="typeP" type="hidden" class="ProDoc"> 
<div class="title-l">  
  <h7>Proyecto</h7>
</div>
<div class="state">
 <table>
<tr>
<td>
<div class="input-group">
      <div class="input-group-append">
        <span class="btn btn-secondary btn-sm "  name="edo" >{!!Form::label('Estado')!!}</span>
      </div>
      <?php
$edo[0]="PENDIENTE";
$edo[1]="ACEPTADO";
$edo[2]="RECHAZADO";
$edo[3]="APROBADO";
$edo[4]="NO APROBADO";
      ?>
   {!!Form::select('edo',$edo,$edo[0])!!}
    </div>
  </td>
  <td>
    <div class="input-group">
      <div class="input-group-append">
        <span class="btn btn-secondary btn-sm "  name="codigo" >{!!Form::label('Código')!!}</span>
      </div>
{!!Form::text('codigo',null,['class'=>' ','placeholder'=>'6512162'])!!}
    </div>
  </td>
       <td>
    <div class="input-group">
      <div class="input-group-append">
        <span class="btn btn-secondary btn-sm "  name="unidad" >{!!Form::label('Unidad')!!} </span>
      </div>
{!!Form::text('unidad',null,['class'=>' ','placeholder'=>'Trabajo Terminal II'])!!}
    </div>
  </td>
      </tr> 
</table>
</div>
<div class="wrapped">
   
  <table border id="project">
    <tr >
    <th colspan="2">
     Nombre del proyecto
    </th>
  </tr>
  <tr>
    <th  colspan="2">
      {!!Form::text('proyecto',null,['class'=>' ','placeholder'=>'Nombre del proyecto'])!!}
    </th>
     </tr>
<tr>
    <th>
 Integrantes
    </th>
    <th>
Descripción
    </th>
</tr>
<tr>
    <td name="integrantes">
      <div class="input-group">
      {!!Form::text('integrante',null,['class'=>' ','placeholder'=>'Aqui va por defaul el de quien registra'])!!}
      <div class="input-group-append">
                         <?php
 $list2[0]="Responsable"; //si el id del alumno en la relacion/proyecto-tiene-alumnos es 1
 $list2[1]="Alumno";//si el id del alumno en la relacion/proyecto-tiene-alumnos es >1
?>
        <button class="btn btn-outline-secondary btn-sm " type="button" name="" >Responsable</button>
         <button  class="btn  material-icons btn-sm" type="button" name="Iadd" >add</button>
      </div>
    </div>
    </td>

    <td rowspan="9">
 <textarea class='form-control' rows='12' placeholder='Descripción del proyecto' type='textarea' name="desc"></textarea>
    </td>
</tr>
<tr>
  <div class="tdimanic">
    @for ($i = 1; $i < 3; $i++)
    <tr id="{!!$i.'IAdd'!!}"  class="iAdd">
      <td>
      <div class="input-group">
      {!!Form::text('boleta',null,['class'=>' ','placeholder'=>'Boleta'])!!}
      {!!Form::email('email',null,['class'=>' ','placeholder'=>'Correo electrónico'])!!}
      {!!Form::text('inte',null,['class'=>' ','placeholder'=>'Integrantes'])!!}
      <div class="input-group-append" id="1">
        <button class="btn btn-outline-secondary material-icons btn-sm" type="button" name="ibtn1" >remove</button>
        <button class="btn btn-outline-secondary material-icons btn-sm" type="button" name="estado_sol" >lens</button>
      </div>
  </div>
</td> 
</tr>
@endfor
</div>   
   </tr> 

 
 <script type="text/javascript">

  </script>
    <tr>
    <th>
   Asesores
  </th>
  </tr>
  <tr>
                 <?php
 $list1[0]="Hector";
 $list1[1]="Julia";
?>
     <td name="integrantes">
      <div class="input-group">
      {!!Form::select('pasesor',$list1)!!}
      <div class="input-group-append">
 <?php
 $list3[0]="1° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 1
 $list3[1]="2° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 2
  $list3[2]="3° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 3
?>
        <button class="btn btn-outline-secondary btn-sm " type="button" name="" >{!!$list3[0]!!}</button>
         <button  class="btn  material-icons btn-sm " type="button" name="Iadd" >add</button>
         <button class="btn btn-outline-secondary material-icons btn-sm" type="button" name="estado_sol" >lens</button>
      </div>
    </div>
    </td>
  </tr>
  <tr>

    <div class="tdimanic">

    @for ($i = 1; $i < 3; $i++)
    <tr id="{!!$i.'AAdd'!!}"  class="iAdd">
      <td>
      <div class="input-group">
        <?php
 $list[0]="Elija una opción";
  $list[1]="Docente";
 $list[2]="Asesor Externo";

?>
      {!!Form::select('tipoas',$list)!!} 
      {!!Form::select('asesor',$list1)!!}
      {!!Form::email('emailas',null,['class'=>' ','placeholder'=>'Correo electrónico'])!!}
        <div class="input-group-append" id="1">
        <button class="btn btn-outline-secondary btn-sm " type="button" name="" >{!!$list3[$i]!!}</button>
        <button class="btn btn-outline-secondary material-icons btn-sm" type="button" name="abtn1" >remove</button>

      </div>
  </div>
</td> 
</tr>
@endfor
</div>
  </div>
   
   </tr> 
  </table>
  <button  class="btn " type="button" name="edit" >Editar</button>
   <button  class="btn " type="button" name="acept" >Registrar</button>

</div>
 @stop 