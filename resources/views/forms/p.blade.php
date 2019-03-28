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
<input id="PageN" type="hidden" name="Proyecto">
<input id="typeP" type="hidden" class="R"> 
<div class="title-l">  
  <h7>Proyecto</h7>
</div>
<div class="state">
 <table>
<tr>
  <td>
    <div class="input-group">
      <div class="input-group-append">
        <span class="btn btn-secondary btn-sm "  name="codigo" >{!!Form::label('Código')!!}</span>
      </div>
{!!Form::text('codigo',null,['class'=>' ','placeholder'=>'6512162'])!!}
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
<td>        
  <table border class="dinamic">
          @for ($i = 1; $i < 4; $i++) <!-- for each integrante-->
       <tr>
      <td name="integrantes">
        <div class="input-group">
          {!!Form::text('boleta',null,['class'=>' ','placeholder'=>'20175469'])!!}
         {!!Form::text('name',null,['class'=>' ','placeholder'=>'Nombre del Alumno'])!!}
          <div class="input-group-append">
            <?php
            $integrante[0]="Responsable";
            $integrante[1]="Alumno";
            ?>
            <button  class="btn btn-outline-secondary btn-sm" type="button" name="" >{!!Form::select('position',$integrante,$integrante[0])!!}</button>
            <button  class="btn btn-outline-secondary material-icons btn-sm" type="button" name="" >done</button>
            <button  class="btn btn-outline-secondary material-icons btn-sm" type="button" name="" >clear</button>           
          </div>
        </div>
      </td>
    </tr>
    @endfor
  </table >
  <button  class="btn  material-icons btn-sm" type="button" name="Iadd" >add</button>
  </td>
  <td rowspan="9">
    <textarea class='form-control' rows='12' placeholder='Descripción del proyecto' type='textarea' name="desc"></textarea>
  </td>
  </tr>
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
      <td>        
  <table  border class="dinamic">
          @for ($i = 1; $i < 4; $i++) <!-- for each integrante-->
       <tr>
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
        </div>
        </div>
      </td>
    </tr>
    @endfor
  </table>
  <button  class="btn  material-icons btn-sm " type="button" name="Aadd" >add</button>
  </td>
  </tr>
</table>
   <button  class="btn " type="button" name="acept" >Registrar</button>

</div>
<script type="text/javascript">
  $( document ).ready(function() {

       $('select, input').attr('class','form-control input-sm');
  });


  </script>
 @stop 