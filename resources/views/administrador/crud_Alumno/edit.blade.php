@extends('layouts.perfiles')
<title>Administrador - Alumno</title>
@section('contenido-perfil')
 <div class="ven-title"> 
    <h3>Modificar Alumno</h3>
</div>
    {!!Form::model($usuario,['route'=>['admin.alumnos.update',$usuario->idUsuario], 'method'=>'PUT'])!!}
     @include('forms.alumno')
    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    {!!Form::model($usuario,['route'=>['admin.alumnos.destroy',$usuario->idUsuario], 'method'=>'DELETE'])!!}
    @if($usuario->deleted_at == null)
    {!!Form::submit('Deshabilitar',['class'=>'btn btn-primary'])!!}
    @else
    {!!Form::submit('Habilitar',['class'=>'btn btn-primary'])!!}
    @endif
    {!!Form::close()!!}
@stop