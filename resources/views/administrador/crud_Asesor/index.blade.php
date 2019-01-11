@extends('layouts.perfiles')
<title>Administrador - Asesor</title>
@section('contenido-perfil')

@include('alerts.success')
<input id="PageN" type="hidden" name="Asesores">

  <div class="title-l"> 
  <h7>Asesores</h7>
</div>


<div class="wrapped">
<div id="table-scroll-x" >
           <table class="fixed_headers">
<thead>
<tr>
   <th  title="clave">
         {!!Form::label('Cédula')!!}
</th>
      <th title="name">{!!Form::label('Asesor Externo')!!} </th>
      
    
  <th   title="email">
  {!!Form::label('Correo')!!}
 
<th   title="pass">
  {!!Form::label('Contaseña')!!}
  
</th>
<th title="state">
      {!!Form::label('Estado')!!}
  </th>
<th title="actions">
   {!!Form::label('Acciones')!!}
  </th>
</tr>
</thead>
<tbody>
 @foreach($asesor as $a)

  <tr>
    <td title="clave" contenteditable="true" >
      {{ $a->cedula }}
    </td>
    <td title="name" contenteditable="true" >{{$a->nombre." ".$a->aP." ".$a->aM}}</td>
    
    <td title="email" contenteditable="true" >
      {{ $a->email }}
    </td> 
    <td title="pass" contenteditable="true" >
      x
    </td>
    <td title="state" contenteditable="true" > Desactivado <input class='form-control-lg' name='name' type='checkbox' value='value' id='area52'>{{$a->deleted_at}} </td>
    <td  title="actions">
   <button type="button" class="btn btn-info">
                          <i id="bval" class=" material-icons" title="Editar" onclick="action();">edit</i>
                          </button>
                            <button type="button" id="delete" class="btn btn-danger">
                          <i id="bdelete" class=" material-icons" title="Eliminar" onclick="">delete</i>
                          </button> 
  
    </td>
     @csrf
  </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>

@stop