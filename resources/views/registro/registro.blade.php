@extends('layouts.principal')
<div hidden></div>
@section('content')
<div class="wrapped">
<div class="contreg">
 <div class="box">
 <div class="title"> 
	<h7 >Registro</h7>
</div>
<h4> Soy: </h4>

<div class="form-group">
<button class="btn" role='link' onclick="window.location='alumnoRegistro'" value="0">Alumno</button></div>
<div class="form-group">
<button class="btn" role='link' onclick="window.location='docenteRegistro'">Docente</button></div>
<div class="form-group">
<button class="btn" role='link' onclick="window.location='asesorRegistro'">Asesor Externo</button></div>
</div>
</div>

</div>

 @stop