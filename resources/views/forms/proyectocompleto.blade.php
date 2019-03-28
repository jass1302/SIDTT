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
<div class="title-l">  
  <h7>Proyecto</h7>
</div>
<div class="state">
 <table>
<tr>
<td>
<div class="input-group">
      <div class="input-group-append">
        <span class="btn btn-secondary btn-sm "  name="" >{!!Form::label('Estado')!!}</span>
      </div>
   {!!Form::text('edo',null,['class'=>'form-control input-sm','placeholder'=>'PENDIENTE'])!!}
    </div>
  </td>
  <td>
    <div class="input-group">
      <div class="input-group-append">
        <span class="btn btn-secondary btn-sm "  name="" >{!!Form::label('Código')!!}</span>
      </div>
{!!Form::text('cproy',null,['class'=>'form-control input-sm','placeholder'=>'6512162'])!!}
    </div>
  </td>
       <td>
    <div class="input-group">
      <div class="input-group-append">
        <span class="btn btn-secondary btn-sm "  name="" >{!!Form::label('Unidad')!!} </span>
      </div>
{!!Form::text('UnidadA',null,['class'=>'form-control input-sm','placeholder'=>'Trabajo Terminal II'])!!}
    </div>
  </td>
      </tr> 
</table>
</div>
<div class="wrapped">
   
  <table id="project">
    <tr >
    <th colspan="2">
     Nombre del proyecto
    </th>
  </tr>
  <tr>
    <th  colspan="2">
      {!!Form::text('proyecto',null,['class'=>'form-control input-sm','placeholder'=>'Nombre del proyecto'])!!}
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
      {!!Form::text('integrantes',null,['class'=>'form-control input-sm','placeholder'=>'Aqui va por defaul el de quien registra'])!!}
      <div class="input-group-append">
                         <?php
 $list2[0]="Responsable";
 $list2[1]="Alumno";
?>
        <button class="btn btn-outline-secondary btn-sm " type="button" name="" >{!!Form::select('permisos',$list2)!!}</button>
         <button  class="btn  material-icons btn-sm" type="button" name="Iadd" >add</button>
      </div>
    </div>
    </td>
    <td rowspan="9">
 <textarea class='form-control' rows='12' placeholder='Descripción del proyecto' type='textarea'></textarea>
    </td>
</tr>
<tr>
  <div class="tdimanic">
    @for ($i = 1; $i < 3; $i++)
    <tr id="{!!$i.'IAdd'!!}"  class="iAdd">
      <td>
      <div class="input-group">
      {!!Form::text('boleta',null,['class'=>'form-control input-sm','placeholder'=>'Boleta'])!!}
      {!!Form::email('email',null,['class'=>'form-control input-sm','placeholder'=>'Correo electrónico'])!!}
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
   function comp()
   {
    if(cont>=3)
      {

    $('button[name="Iadd"]').attr('disabled',true);
      }else{

  $('button[name="Iadd"]').attr('disabled',false);
      }
    }

   $( document ).ready(function() {
      $('select').attr('class','form-control input-sm');
     //$('.IAdd').hide();

    $('button[name="Iadd"]').on('click', function (){

      i++;
      comp();
    }); 



    $('button[name="ibtn1"]').on('click', function (){

       var btnId = $(this).closest("tr").attr('id');
    $("tr#"+btnId).hide();
    cont--;
    comp();

    });
    
  });


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
 $list3[0]="1° Asesor";
 $list3[1]="2° Asesor";
  $list3[2]="3° Asesor";
?>
        <button class="btn btn-outline-secondary btn-sm " type="button" name="" >{!!Form::select('permisos',$list3)!!}</button>
         <button  class="btn  material-icons btn-sm " type="button" name="Iadd" >add</button>
      </div>
    </div>
    </td>
  </tr>
  <tr>

  <div class="tdimanic">

    @for ($i = 1; $i < 3; $i++)
    <tr id="{!!$i.'IAdd'!!}"  class="iAdd">
      <td>
      <div class="input-group">
        <?php
 $list[0]="Docente";
 $list[1]="Asesor Externo";
?>
      {!!Form::select('tipoas',$list)!!} 
      {!!Form::select('asesor',$list1)!!}
      <div class="input-group-append" id="1">
        <button class="btn btn-outline-secondary material-icons btn-sm" type="button" name="abtn1" >remove</button>
        <button class="btn btn-outline-secondary material-icons btn-sm" type="button" name="estado_sol" >lens</button>
      </div>
  </div>
</td> 
</tr>
@endfor
</div>   
   </tr> 
  </table>
   <button  class="btn " type="button" name="acept" >Registrar</button>
</div>
 @stop 