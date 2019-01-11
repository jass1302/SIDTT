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
  <h7>Proyecto</h7>
</div>
<div class="estate">

    <div class="form-row">
    <div class="form-group col-md-2">
      {!!Form::label('Estado')!!}
    </div>
     <div class="form-group col-md-4"> 

      {!!Form::text('edo',null,['class'=>'form-control-plaintext','placeholder'=>'PENDIENTE','disabled' => 'disabled'])!!}
    </div>
    <div class="form-group col-md-2">
      {!!Form::label('Código')!!}
      </div>
    <div class="form-group col-md-4">
      {!!Form::text('cproy',null,['class'=>'form-control','placeholder'=>'6512162','disabled' => 'disabled'])!!}
    </div>
    </div>
</div>

<div class="form-row">
 <div class="form-group col-8">
  {!!Form::label('Nombre de Proyecto')!!} 
  <a class="material-icons "> edit</a> 
   {!!Form::text('nombrePro',null,['class'=>'form-control','placeholder'=>'Nombre del Proyecto','disabled' => 'disabled'])!!}
</div>
<div class="form-group col-4">
  
    {!!Form::label('Unidad de Aprendizaje')!!} 
  {!!Form::text('UnidadA',null,['class'=>'form-control','placeholder'=>'Unidad de Aprendizaje','disabled' => 'disabled'])!!}

</div>
</div>
<div class="form-row">
 <div class="form-group col-6">
 <div class="form-row">
   <div class="form-group col-xs-12">
  {!!Form::label('Integrantes')!!} 
  
  <table id="table-scroll-crud" >
<tbody id="tbody" class="t130-h">
  <tr>
    <td colspan="2"class="t100">
      {!!Form::text('integrantes',null,['class'=>'form-control','placeholder'=>'Aqui va por defaul el de quien registra','disabled' => 'disabled'])!!}
    </td>
    <!-- servira para los integrantes extras<td> <i class="material-icons"> bookmark</i></td>-->
  </tr>
  </tbody>
</table>


  {!!Form::label('Asesores')!!} 
    <?php
 $list[0]="fulanito";
 $list[1]="Asesor Externo";
?>
<table id="table-scroll-crud" >
<tbody id="tbody1" class="t130-h">
  <tr>
    <td class="t80"> {!!Form::text('asesor',null,['class'=>'form-control','placeholder'=>'Aqui va por defaul el asesor minimo','disabled' => 'disabled'])!!} </td>
    <td><i class="material-icons yellow"> fiber_manual_record</i></td>
  </tr>
  </tbody>
</table>
</div>
</div>

</div>
<div class="form-group col-5">
   {!!Form::label('Descripción')!!} 
   <a class="material-icons "> edit</a> 
  <textarea class='form-control' rows='12' placeholder='Descripción del proyecto' type='textarea' disabled="disabled"></textarea>
  </div>

</div>


   
 
 
 @stop 