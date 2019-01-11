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

       var le= document.getElementById("proyecto");
 le.className+=" active";
 for (var i = 0; i <2; i++) {
    Agrega();
    Agrega1();
 }

   
}
</script>
<div class="ven-title"> 
  <h7>Registro de Proyecto</h7>
</div>
<div class="form-row">
 <div class="form-group col-8">
  {!!Form::label('Nombre de Proyecto')!!} 
   {!!Form::text('nombrePro',null,['class'=>'form-control','placeholder'=>'Nombre del Proyecto'])!!}
</div>
<div class="form-group col-4">
  
    {!!Form::label('Unidad de Aprendizaje')!!} 
  {!!Form::text('UnidadA',null,['class'=>'form-control','placeholder'=>'Unidad de Aprendizaje'])!!}

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
    <td class="t100"> {!!Form::select('Asesor', $list, null, ['class' => 'form-control'])!!} </td>
  </tr>
  </tbody>
</table>
</div>
</div>

</div>
<div class="form-group col-5">
   {!!Form::label('Descripción')!!} 
  <textarea class='form-control' rows='12' placeholder='Descripción del proyecto' type='textarea'></textarea>
  </div>

</div>
<div class="form-row">
 <div class="form-group col-6">
 

</div>

   
<script type="text/javascript">


  function Agrega(){

    
var TR= document.createElement("tr");
 
var TD1=document.createElement("td")
var TD2=document.createElement("td")

TD1.className="t40";
TD1.innerHTML="<input class='form-control' placeholder='Boleta'  type='text'> ";
TD2.className="t60";
TD2.innerHTML="<input class='form-control' placeholder='Correo Electrónico' id='asesors' type='text'>";

TR.appendChild(TD1);
TR.appendChild(TD2);
 
document.getElementById("tbody").appendChild(TR)

}

  function Agrega1(){
   
    
var TR= document.createElement("tr");
 
var TD1=document.createElement("td")

TD1.className="t100";
TD1.innerHTML=" <select  class='form-control '><option value='0'>Select...</option>option value='1'>ñose</option><option value='2'>Asesor Externo</option></select>";


TR.appendChild(TD1);
 
document.getElementById("tbody1").appendChild(TR)


}
</script>
 
 
 @stop 