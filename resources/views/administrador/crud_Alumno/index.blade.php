@extends('layouts.perfiles')
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
<!---------------Guardaros todos en un solo archivo-->
<input id="PageN" type="hidden" name="Alumnos">
<script type="text/javascript">

function Menu(){ 
var name=document.getElementById('PageN').name;
       document.getElementById(name).className+="active";
   
}
</script>
<!-------------------------------------------------->
<div class="title-l">  
  <h7>Alumnos</h7>
</div>
<div class="wrapped">
<table class="table table-hover table-responsive">
  <thead> 
<tr class="filters">
<th title="clave" >
Boleta
                       </th >

                        <th  title="name">
                           Alumno
                          
                        </th>
                        
                        <th  title="type">
                         Tipo
                       </th >
                        <th  title="group-ua" >
                          Grupo
                        </th >
                        <th title="email" >
                          Correo
                        </th >
                         <th  title="pass" >
                         Password
                        </th>
                        <th  title="state">
                          Estado  
                        </th >
                        <th title="actions"> Acciones</th>
                    </tr>
                </thead>
  <tbody>
  @foreach($usuario as $us)

  <tr>
    {!!Form::open()!!}
    <td title="clave" contenteditable="true" class="editeable">{{ $us->boleta }}</td>
    <td title="name"contenteditable="true" class="editeable" >{{$us->nombre." ".$us->ape_pat." ".$us->ape_mat}}</td>
   
    <td title="type"contenteditable="true" class="editeable">A</td>
    <td title="group-ua" contenteditable="true" class="editeable" ></td>
    <td title="email" contenteditable="true" class="editeable" >{{$us->email}}</td>
    <td title="pass" contenteditable="true" class="editeable" >x</td>

     <td title="state"contenteditable="true" class="editeable" >
      @if($us->deleted_at == null)
      Activo
      @else
      Inactivo
      @endif
      </td>
     <td title="actions">

   <button type="button" class="btn btn-info">
    <i id="bval" class=" material-icons" title="Editar" onclick="window.location=''">edit</i>
    </button>
    
      <button type="button" id="delete" class="btn btn-danger">
        <i id="bdelete" class=" material-icons" title="Eliminar" onclick="window.location='admin.alumnos.destroy'">delete</i>
      </button> 

    </td>
     @csrf
     {!!Form::close()!!}
  </tr>
  @endforeach
  </tbody>
</table>
        </div>
 @stop 