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
<input id="typeP" type="hidden" class="Registrar"> 
<div class="title-l">  
  <h7>Registro de proyecto</h7>
</div>
<div class="state">
 <table >
<tr>
  <td>
    <div class="input-group">
      <div class="input-group-append">
        <span class="btn btn-secondary btn-sm "  name="codigo" >{!!Form::label('Código')!!}</span>
      </div>
{!!Form::text('codigo',null,['class'=>'form-control input-sm','placeholder'=>'6512162'])!!}
    </div>
  </td>
      </tr> 
</table>
</div>
<div class="wrapped">
   
  <table id="project" border>
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
      {!!Form::text('1integrante',null,['class'=>'form-control input-sm','placeholder'=>'Aqui va por defaul el de quien registra'])!!}
      <div class="input-group-append">
         <button  class="btn  material-icons btn-sm" type="button" name="Iadd" >add</button>
      </div>
    </div>
    </td>
    <td rowspan="9">
 <textarea class='form-control' rows='12' placeholder='Descripción del proyecto' type='textarea' name="desc"></textarea>
    </td>
</tr>
<tr class="integrantes1">

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
     <td name="integrantes">
      <div class="input-group">
      {!!Form::select('pasesor',$list1)!!}
      <div class="input-group-append">
 <?php
 $list3[1]="1° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 1
 $list3[2]="2° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 2
  $list3[3]="3° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 3
?>
        <button class="btn btn-outline-secondary btn-sm " type="button" name="" >{!!$list3[1]!!}</button>
         <button  class="btn  material-icons btn-sm " type="button" name="Iadd" >add</button>
     </div>
    </div>
    </td>
  </tr>
  <tr>

  <div class="asesores">

    @for ($i = 2; $i < 4; $i++)
    <tr id="{!!$i.'asesor'!!}"  class="AAdd">
      <td>
      <div class="input-group">
        <?php
 $list[0]="Elija una opción";
  $list[1]="Docente";
 $list[2]="Asesor Externo";

?>
      {!!Form::select('tipoas',$list)!!} 
      {!!Form::select('asesor',$list1)!!}
      {!!Form::email('emailas',null,['class'=>'form-control input-sm','placeholder'=>'Correo electrónico'])!!}
        <div class="input-group-append" >
        <button class="btn btn-outline-secondary btn-sm " type="button" name="" >{!!$list3[$i]!!}</button>
        <button class="btn btn-outline-secondary material-icons btn-sm" type="button" name="abtn1" >remove</button>

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
<script type="text/javascript">

       
///-------i itegrantes   a asesres
   if($("#typeP").attr('class')=="Registrar") //Registro de Proyecto desde la Vista Alumno
  {
    $(".state").width('160px');
    $("input[name='1integrante']").attr('disabled',true);
    $('select').attr('class','form-control input-sm');

///---------Se ocultan los campos dinamicos---------------------
//$(".iAdd,.aAdd").hide();
$("select[name='asesor']" ).hide();
$("input[name='emailas']" ).hide();

///-------------------------------------------------------------
///------Select Dinamico Asesores------------------------------
$( "select[name='tipoas']" )
  .change(function() {
    var id= $(this).closest('tr').attr('id');
     if( $( "#"+id).find("select[name='tipoas'] option:selected" ).text()=="Docente"){
       $( "#"+id).find("select[name='asesor']" ).show();
       $( "#"+id).find("input[name='emailas']" ).hide();
     }
     if( $( "#"+id).find("select[name='tipoas'] option:selected" ).text()=="Asesor Externo"){
       $( "#"+id).find("select[name='asesor']" ).hide();
       $( "#"+id).find("input[name='emailas']" ).show();
     }
     if( $( "#"+id).find("select[name='tipoas'] option:selected" ).text()=="Elija una opción"){
       $( "#"+id).find("select[name='asesor']" ).hide();
       $( "#"+id).find("input[name='emailas']" ).hide();
     }
    });

///-----------ADD and DELETE  campos dinamicos -------------------------
 var cont=1;
$('button[name="Iadd"]').on('click',function(){ 

 
   $('.integrantes1').append(
    $("<tr id='"+cont+"'></tr>").append(
      $("<td name='integrantes'></td>").append(
        $("<div class='input-group'></div>").append(
          [$("<input type='text' placeholder='Integrante'>"),$("<div class='input-group-append' > </div>").append(
            $(" <button class='btn btn-outline-secondary material-icons btn-sm' type='button' name='ibtn1' ></button><").text('remove'))
          ])
        )
      )
    );  
   cont++;
if(cont==3)
{
  $('button[name="Iadd"]').hide();
}
  $("input").attr('class','form-control input-sm');
   });

 
   $("button[name='ibtn1']").on('click',function(){
      alert('1');
   });

 }
  </script>
 @stop 