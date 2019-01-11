@extends('layouts.perfilesdocente')
<title>SIDTT - Docente </title>
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

       document.getElementById("proyectos").className+=" active";
   
}
</script>
<div class="ven-title"> 
  <h7>Solicitud de Aceptación</h7>
</div>
<div class="form-row">
 <div class="form-group col-6">
   
  {!!Form::text('buscar',null,['class'=>'form-control-plaintext','placeholder'=>'Buscar...'])!!}
{!!Form::close()!!}
</div>
<div class="form-group col-2">
  {!!link_to_route('admin.alumnos.create', $title = ' search ',null,$attributes = ['class'=>'material-icons'])!!}
 {!!link_to_route('admin.alumnos.create', $title = ' Buscar ',null,$attributes = ['class'=>' '])!!}

</div>
</div>

  <table id="table-scroll-crud">
<thead>
<tr>
   <th class="t20" >
         {!!Form::label('Proyecto')!!} 
</th>
      <th class="t30">{!!Form::label('Integrantes')!!} </th>
      
      <th class="t30">
         {!!Form::label('Descripción')!!}
  </th>
  <th class="t10">
         {!!Form::label('Estado')!!}
  </th>
      <th class="t10">
        
  </th>

</tr>
</thead>
<tbody id="tbody" class="t300-h">
 

  <tr>
    <td class="t20">
    
    </td>
    <td class="t30"></td>
    <td class="t30">  </td>
     <td class="t10">  </td>
       <td  class="t10">
 <a  class="material-icons md-18" title="Ver Proyecto">remove_red_eye</a> 
 <a  class="material-icons md-18" title="Aceptar">done</a> 
 <a  class="material-icons md-18" title="Rechazar">close</a>      
    </td>


  </tr>

  </tbody>
</table>

 @stop 