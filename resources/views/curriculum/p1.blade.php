@extends('layouts.curriculum')

<title>SIDTT - Curriculum/Contacto</title>

@section('contenidos')
<h2> Contacto</h2>
{!!Form::open(['route'=>'registro.store', 'method'=>'POST'])!!}

  <div class="form-row t50-h">
    <div class="form-group col-6">
    imagen
    <input type="file" class="form-control-file form-control">
    </div>
  <div class="form-group col-6">
    <div class="form-row t50-h">
      {!!Form::label('Correo Opcional')!!}
      {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo electrónico'])!!}
    </div>
  <div class="form-row t50-h">
 <div class="form-group col-6">
      {!!Form::label('Telefono')!!}
      {!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ingrese número telefonico'])!!}
</div>
</div>
<div class="form-row t50-h">
<div class="form-group col-6">
     {!!Form::label('Celular')!!}
      {!!Form::text('cel',null,['class'=>'form-control','placeholder'=>'Ingrese número de celular'])!!}
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
function Menu(){
       var s= document.getElementById("Contacto");
 s.className+=" active";
}
</script>
             {!!Form::hidden('type','asesor')!!}
  
<a href="curriculum2" class=" btnf" >Siguiente</a>               
    
    {!!Form::close()!!}

@stop