@extends('layouts.perfiles')
<title>Administrador - Docente</title>
@section('contenido-perfil')

@if(Session::has('message'))
  <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {{Session::get('message')}}
  </div>
  @endif

<input id="PageN" type="hidden" name="Docentes">

<div class="title-l"> 
  <h7>Docentes</h7>
</div>

<div class="wrapped">
<div id="table-scroll-x" class="table-responsive">
<table class="fixed_headers">
<thead>

<tr>
  <th  title="clave" >
         {!!Form::label('Cédula Profesional')!!}
</th>
   <th  title="clave" >
         {!!Form::label('No. Trabajador')!!}
</th>
      <th title="name">
        {!!Form::label('Docente')!!} 
      </th>
     <th title="academia">
        {!!Form::label('Academia')!!} 
      </th> 
      

<th  title="email" >
  {!!Form::label('Correo')!!}
 
<th  title="pass">
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
<tbody >
    @foreach($usuario as $doc)
  <tr>
    <td title="clave" contenteditable="true"> 0025555</td>
    <td title="clave" contenteditable="true">
     {{ $doc->numerodet }}
    </td>
    <td title="name" contenteditable="true">{{$doc->nombre." ".$doc->ape_pat." ".$doc->ape_mat}}</td>
       <td title="academia" contenteditable="true">
        {{
       $doc->Academia
       }}
     </td>
    <td title="email" contenteditable="true">
      {{ $doc->email}}
    </td>
    <td title="pass" contenteditable="true" >
      x
    </td>
    <td title="state" contenteditable="true" >
      <input class='form-control-lg' name='name' type='checkbox' value='value' id='area52'>Activo {{$doc->deleted_at}}
    </td>
    <td  title="actions" >
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