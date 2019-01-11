@extends('layouts.principal')
<div hidden></div>
@section('content')
@include('alerts.requests')
<div class="wrapped"><head>
  <title>SIDTT - Registro</title>
</head>
<div id="container">          
<div class="box">	
<div class="title-l"> 
<h7 >Registro</h7>
</div>

{!!Form::open(['route'=>'registro.store', 'method'=>'POST'])!!}

	@include('forms.alumno')

<div class="form-row">
<div class=" col-8">
<label>
          <input type="checkbox" id="TC" name="terms">
          <label >
            <a id="link" onclick="document.getElementById('terms').style.visibility='visible';"> Acepto Terminos y Condiciones </a>
          </label>
        </label>
</div>
<div class=" col-4">
	{!!Form::submit('Registrar',['class'=>'btn'])!!}
</div>
 	</div>
{!!Form::close()!!}
</div>
</div>
<div id="terms">
@include('forms.terminos')
</div>
<div>

@stop