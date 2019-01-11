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

       document.getElementById("UA").className+=" active";
       document.getElementById("proyecto").className+=" active";
   
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
    </div>
</div>
<div id="ficha_proyect">
<div class="form-row">
 <div class="form-group col-8">
  {!!Form::label('Nombre de Proyecto')!!} 
  
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
  <a class="material-icons " title="Editar"> edit</a> 
  <table id="table-scroll-crud" >
<tbody id="tbody" class="t130-h">
  <tr>
    <td class="t87">
      {!!Form::text('integrantes',null,['class'=>'form-control','placeholder'=>'Aqui va por defaul el de quien registra','disabled' => 'disabled'])!!}
    </td>
    <td class="sm"><input type="checkbox" checked >Responsable</td>
    
  </tr>
  <tr>
    <td class="t87">
      {!!Form::text('integrantes',null,['class'=>'form-control','placeholder'=>'Aqui va por defaul el de quien registra','disabled' => 'disabled'])!!}
    </td>
    <td class="sm"><input type="checkbox" >Responsable</td>
    
  </tr>
  <tr>
    <td class="t87">
      {!!Form::text('integrantes',null,['class'=>'form-control','placeholder'=>'Aqui va por defaul el de quien registra','disabled' => 'disabled'])!!}
    </td>
    <td class="sm"><input type="checkbox"  >Responsable</td>
    
  </tr>
  
  </tbody>
</table>
</div>
</div>
</div>
<div class="form-group col-6">
 {!!Form::label('Asesores')!!} 
<table id="table-scroll-crud" >
<tbody id="tbody1" class="t130-h">
  <tr>
    <td class="t75"> {!!Form::text('asesor',null,['class'=>'form-control','placeholder'=>'Aqui va por defaul el asesor minimo','disabled' => 'disabled'])!!} </td>
    <td>
    <a  class="material-icons md-18" title="Ver Curriculo">remove_red_eye</a> 
 <a  class="material-icons md-18" title="Aceptar">done</a> 
 <a  class="material-icons md-18" title="Rechazar">close</a> 
  </td></tr>
  <tr>
    <td class="t75"> {!!Form::text('asesor',null,['class'=>'form-control','placeholder'=>'Aqui va por defaul el asesor minimo','disabled' => 'disabled'])!!} </td>
    <td>
    <a  class="material-icons md-18" title="Ver Curriculo">remove_red_eye</a> 
 <a  class="material-icons md-18" title="Aceptar">done</a> 
 <a  class="material-icons md-18" title="Rechazar">close</a> 
  </td></tr>
  <tr>
    <td class="t87"> <select class='form-control' name='nivel'><option value='0'>Seleccione un Asesor</option><option value='1'>B</option></select> </td>
    <td>
    <a  class="material-icons md-18" title="Ver Curriculo">remove_red_eye</a> 

  </td></tr>
  </tbody>
</table>
</div>

</div>
<div class="form-row">
 <div class="form-group col-6">
 <div class="form-row">
   <div class="form-group col-xs-12">
 {!!Form::label('Revisores')!!} 
<table id="table-scroll-crud" >
<tbody id="tbody1" class="t130-h">
  <tr>
   <td class="t93"> <select class='form-control' name='nivel'><option value='0'>Seleccione un Revisor</option><option value='1'>B</option></select> </td>
    <td> </td> 
  </tr>
  <tr>
   <td class="t93"> <select class='form-control' name='nivel'><option value='0'>Seleccione un Revisor</option><option value='1'>B</option></select> </td>
    
  </tr>
  <tr>
    <td class="t93"> <select class='form-control' name='nivel'><option value='0'>Seleccione un Revisor</option><option value='1'>B</option></select> </td>
     
  </tr>
  </tbody>
</table>
<br>
{!!Form::label('Jurado')!!} 
<a class="material-icons " title="Editar"> edit</a> 
<table id="table-scroll-crud" >
<tbody id="tbody1" class="t130-h">
  <tr>
   <td class="t20" > Vocal I</td><td class="t75">{!!Form::text('asesor',null,['class'=>'form-control','placeholder'=>'','disabled' => 'disabled'])!!}</td>
  </tr>
  <tr>
   <td class="t20" > Vocal II</td><td class="t75">{!!Form::text('asesor',null,['class'=>'form-control','placeholder'=>'','disabled' => 'disabled'])!!}</td>
    
  </tr>
  <tr>
    <td class="t20" > Vocal III</td><td class="t75">{!!Form::text('asesor',null,['class'=>'form-control','placeholder'=>'','disabled' => 'disabled'])!!}</td>
     
  </tr>
  <tr>
    <td class="t20" > Presidente</td><td class="t75">{!!Form::text('asesor',null,['class'=>'form-control','placeholder'=>'','disabled' => 'disabled'])!!} </td>
     
  </tr>
  </tbody>
</table>
</div>
</div>

</div>
<div class="form-group col-5">
   {!!Form::label('Descripción')!!} 
 
  <textarea class='form-control' rows='12' placeholder='Descripción del proyecto' type='textarea' disabled="disabled"></textarea>
  </div>
</div>

<a class="btn " title="Editar"> Guardar</a> 
</div>

 
 @stop 