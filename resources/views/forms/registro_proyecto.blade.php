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

<div  class="wrapped">

  <diV id="card_project">
   <div class="row">
    <div class="col-sm"   >Nombre del proyecto</div>
  </div>
  <div class="row">
    <div class="col-sm" >{!!Form::text('proyecto',null,['class'=>'form-control input-sm','placeholder'=>'Nombre del proyecto'])!!}</div>
  </div>

  <div class="row">
    <div class="col-sm"> 
      <div class="row">
        <div class="col-sm"  > Integrantes</div>
      </div>
      <div class="row">
        <div class="col-sm"> 
          <div class="input-group">
            {!!Form::text('1integrante',null,['class'=>'form-control input-sm','placeholder'=>'Aqui va por defaul el de quien registra'])!!}
            <div class="input-group-append">
              <button  class="btn  material-icons btn-sm" type="button" name="Iadd" >add</button>
            </div>
          </div> 
        </div>
      </div>
      
      <div class="integrantes"> 
           
      
      </div>
      <div class="row">
        <div class="col-sm" > Asesores</div>
        <div class="col-sm"> </div>
      </div>

                 <?php
                  $list1[0]="Hector";
                  $list1[1]="Julia";
                  $list3[1]="1° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 1
                  $list3[2]="2° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 2
                  $list3[3]="3° Asesor";//si el id del alumno en la relacion/proyecto-tiene-asesor es 3
                  $list[0]="Elija una opción";
                  $list[1]="Docente";
                  $list[2]="Asesor Externo";
                  ?>

      <div class="row">
        <div class="col-sm">
          <div class="input-group">
            {!!Form::select('pasesor',$list1)!!}
            <div class="input-group-append">
              <button class="btn btn-outline-secondary btn-sm " type="button" name="" >{!!$list3[1]!!}</button>
              <button  class="btn  material-icons btn-sm " type="button" name="Iadd" >add</button>
            </div>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-sm"> 
          <div class="input-group">
            {!!Form::select('tipoas',$list)!!}
            {!!Form::select('asesor',$list1)!!}
            {!!Form::email('emailas',null,['class'=>'form-control input-sm','placeholder'=>'Correo electrónico'])!!}
            <div class="input-group-append" >
              <button class="btn btn-outline-secondary btn-sm " type="button" name="" >{!!$list3[1]!!}</button>
              <button class="btn btn-outline-secondary material-icons btn-sm" type="button" name="abtn1" >remove</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="row">
        <div class="col-sm"> Descripción</div>
       </div>
      <div class="row">
        <div class="col-sm"> 
          <textarea class='form-control' rows='12' placeholder='Descripción del proyecto' type='textarea' name="desc"></textarea>
        </div>
      </div>
    </div>
  </div>
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
jQuery(function(){
  var cont=1;
$('button[name="Iadd"]').on('click',function(){ 
 console.log(cont);
   $('.integrantes').append(
    $("<div class='row' id='"+cont+"'></div>").append(
      $("<div class='col-sm'></div>").append(
        $("<div class='input-group'></div>").append(
          [$("<input type='text' placeholder='Integrante'>"),$("<div class='input-group-append'></div>").append(
            $(" <button class='btn btn-outline-secondary material-icons btn-sm' type='button' name='abtn1' ></button>").text('remove'))
          ])
        )
      )
    );  
   cont++;

  $("input").attr('class','form-control input-sm');
   });


 $('body').on('click', "button[name='abtn1']", function() {
  console.log(cont);

  var id= $(this).closest('div.row').attr('id');
  alert(id);

var id1 = parseInt(id);
id1++;
var id2 = parseInt(id);

  if ($("div #"+id1).length > 0)
  {//existe
    $("div#"+id1).attr('id',id2);
  } 

    cont--;
$("div #"+id).hide();
 
});
   });


 }

  </script>
  <style>
  .button_delete {
    background-image: url('../../../media/images/delete.png');
    background-position:center;
    background-repeat:no-repeat;
  }
  .button_add {
    background-image: url('../../../media/images/add.png');
    background-position:center;
    background-repeat:no-repeat;
  }
  td {
    padding: 2px;
  }
</style>
<table style="border: 1px solid black; background: #ccc;" id="tbl">
  <thead>
    <tr>
      <td>Input 1</td>
      <td>a</td>
      <td>s</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" name="input1" /></td>
      <td>
        <button title="Remove" type="button" class="button_delete" name="button_delete[]">a</button>
      </td>
      <td>
        <button title="Add" type="button" class="button_add" name="add_row">s</button>
      </td>
    </tr>
  </tbody>
</table>
<script type="text/javascript">
$(function() {
  // First, make sure if only one row that it does not have 
  // a delete button.
  if ($('#tbl >tbody>tr').length === 1) {
    $('#tbl >tbody>tr').each(function(){
      $(this).find(".button_delete").hide();
    });
  }
  // Response to a row add event
  $("button[type='button'][name^='add_row']").on("click", function() {
    $('#tbl tbody>tr:last').clone(true).insertAfter('#tbl tbody>tr:last');
    // reset out fields on newly inserted row so it does not retain last row's values
    $("#tbl tbody>tr:last").removeAttr('id');
    $("#tbl tbody>tr:last input[type=text]").each(function() {$(this).val('');}); 
    $("#tbl tbody>tr:last input[type=hidden]").each(function() {$(this).val(0);});
    $("#tbl tbody>tr:last input[type=checkbox]").each(function() {$(this).attr('checked', false);}); 
    $("#tbl tbody>tr:last select").each(function() {$(this).prop('selectedIndex',0);}); 
    $("#tbl tbody>tr:last button[name^=button_delete]").each(function() {$(this).show();});
    // hide + button on all but last row
    $('#tbl >tbody>tr').not(':last').each(function() {
      $(this).find(".button_add").hide();
    });
    return false;
  });
  // respond to a delete row event
  $("button[type='button'][name^='button_delete']").on("click", function() {
    $(this).closest('tr').remove();
    $('#tbl >tbody>tr').not(':last').each(function() {
      $(this).find(".button_add").hide();
    });
    $('#tbl >tbody>tr:last').each(function() {
      $(this).find(".button_add").show();
    });
    // Only one row left, hide the delete button
    if ($('#tbl >tbody>tr').length === 1) {
      $('#tbl >tbody>tr').each(function(){
        $(this).find(".button_delete").hide();
      });
    }
    return false;
  });
});
</script>
 @stop 