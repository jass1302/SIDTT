@extends('layouts.perfiles')
<title>Administrador - Unidades</title>
@section('contenido-perfil')
 <div class="ven-title"> 
    <h3>Modificar Unidades</h3>
</div>
  {!!Form::model($uni,['route'=>['admin.unidades.update',$uni->id], 'method'=>'PUT'])!!}
     @include('forms.unidades')
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    {!!Form::model($uni,['route'=>['admin.unidades.destroy',$uni->id], 'method'=>'DELETE'])!!}
    @if($uni->deleted_at == null)
    {!!Form::submit('Deshabilitar',['class'=>'btn btn-primary'])!!}
    @else
    {!!Form::submit('Habilitar',['class'=>'btn btn-primary'])!!}
    @endif
    {!!Form::close()!!}
@stop