@extends('layouts.perfiles')
<title>Administrador - Unidades</title>
@section('contenido-perfil')

 @if(Session::has('message'))
  <div class="alert alert-warning alert-dismissible" role="alert">
      {{Session::get('message')}}
  </div>
  @endif
  <input id="PageN" type="hidden" name="Unidades">
  <div class="title-l"> 
  <h7>Unidades</h7>
</div>
  <div class="wrapped">
<div id="table-crud">
           <table class="table table-hover table-responsive">
    <thead>
<tr>
   <th  title="clave"  >
    {!!Form::label('Código')!!}
   </th>
   <th  title="ua"  >
         {!!Form::label('Unidad de Aprendizaje')!!} 
</th>
      <th  title="group" >{!!Form::label('Grupo')!!} </th>
      
      <th  title="name" >
         {!!Form::label('Docente')!!}
  </th>
  <th  title="periodo" >
         {!!Form::label('Periodo')!!}
  </th>
    
    <th  title="date" >
         {!!Form::label('Inicio')!!}
  </th>
   <th  title="date" >
         {!!Form::label('Fin')!!}
  </th>
  <th  title="state" >
         {!!Form::label('Estado')!!}
  </th>
  <th title="actions" > 
    {!!Form::label('Acciones')!!}
  </th>

</tr>
</thead>
 <tbody>
    @foreach($uni as $u)
   <tr>
    <td title="clave" contenteditable="true" class="editeable">123456</td>
 <td  title="ua"  class="editeable" > {{$u->unidad}}
    <select class="custom-select form-control" id="inputGroupSelect04">
    <option selected>Choose...</option>
    <option value="1">Trabajo Termianl I</option>
    <option value="2">Trabajo Termianl II</option>
  </select>
    </td>
    <td title="group"   contenteditable="true" class="editeable"> {{$u->grupo}}</td>
    <td  title="name"  contenteditable="true" class="editeable"> <div class="input-group">
   {!!Form::select('d_titular',$docentes, $u->d_titular, ['class'=>'custom-select form-control', 'id' => 'inputGroupSelect04'])!!}
  </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary material-icons" type="button" title="Curriculim">assignment_ind</button>
  </div>
</div>  
    </td>
    <td  title="periodo" contenteditable="true"  class="editeable">{{$u->periodo}}</td>
    <td  title="date"  class="editeable">
      {!!Form::date('fecha_ini',\Carbon\Carbon::parse($u->fecha_ini)->format('d/m/Y'), ['class' => 'form-control'])!!}
    </td>
    <td  title="date" class="editeable">
       {!!Form::date('fecha_fin',\Carbon\Carbon::parse($u->fecha_fin)->format('d/m/Y'), ['class' => 'form-control'])!!}
     <td title="state"   class="editeable">
  @if($u->deleted_at == null)
  <label>Activo</label>
  @else
  <label>Inactivo</label>
  @endif
</td>
    <td  title="actions"  class="editeable">
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