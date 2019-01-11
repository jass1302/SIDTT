@extends('layouts.curriculum')

<title>SIDTT - Curriculum/Titulos</title>

@section('contenidos')
<h2> Cursos y Certificaciones Recibidas </h2>

<table   id="table-scroll">
<thead>
<tr>
   <th class="t15" >
         {!!Form::label('Periodo')!!}
</th>
      <th class="t25">{!!Form::label('Lugar')!!} </th>
      <th class="t25" >
         {!!Form::label('Área del Curso/Certificación')!!}

  </th>
      <th class="t35">
         {!!Form::label('Descripción')!!}
  </th>
</tr>
</thead>
<tbody id="tbody" class="t120-h">
</tbody>
</table>
<script type="text/javascript">
function Menu(){ 
       var w= document.getElementById("Cursos");
 w.className+=" active";
   Agrega();Agrega1();
}
  function Agrega(){
var TR= document.createElement("tr");
 
var TD1=document.createElement("td")
var TD2=document.createElement("td")
var TD3=document.createElement("td");
var TD4= document.createElement("td")
TD1.className="t15";
TD1.innerHTML="<input class='form-control' placeholder='' name='fechapub' type='text'>";
TD2.className="t25";
TD2.innerHTML="<input class='form-control' placeholder='' name='fecapub' type='text'>";
TD3.className="t25";
TD3.innerHTML="<input class='form-control' placeholder='' name='fecapub' type='text'>";
TD4.className="t35";
TD4.innerHTML="<textarea class='form-control' rows='auto' placeholder='' name='fecapub' type='textarea'></textarea>";
TR.appendChild(TD1);
TR.appendChild(TD2);
TR.appendChild(TD3);
TR.appendChild(TD4);
 
document.getElementById("tbody").appendChild(TR)
}
function Agrega1(){
var TR= document.createElement("tr");
 var TD1=document.createElement("td")
var TD2=document.createElement("td")
var TD3=document.createElement("td");
var TD4= document.createElement("td")
TD1.className="t15";
TD1.innerHTML="<input class='form-control' placeholder='' name='fechapub' type='text'>";
TD2.className="t25";
TD2.innerHTML="<input class='form-control' placeholder='' name='fecapub' type='text'>";
TD3.className="t25";
TD3.innerHTML="<input class='form-control' placeholder='' name='fecapub' type='text'>";
TD4.className="t35";
TD4.innerHTML="<textarea class='form-control' rows='auto' placeholder='' name='fecapub' type='textarea'></textarea>";
TR.appendChild(TD1);
TR.appendChild(TD2);
TR.appendChild(TD3);
TR.appendChild(TD4);
 
document.getElementById("tbody1").appendChild(TR)
document.getElementById("Periodo").value=""
document.getElementById("lugar").value="";
document.getElementById("area").value="";
document.getElementById("desc").value="";
}
</script>

 <a href="javascript:Agrega()" class="btnl material-icons md-36" >add_circle</a>
<h2> Cursos Impartidos </h2>

<table class="table table-hover"  id="table-scroll">
<thead>
<tr>
   <th class="t15" >
         {!!Form::label('Periodo')!!}
</th>
      <th class="t25">{!!Form::label('Lugar')!!} </th>
      <th class="t25" >
         {!!Form::label('Área del Curso/Certificación')!!}

  </th>
      <th class="t35">
         {!!Form::label('Descripción')!!}
  </th>
</tr>
</thead>
<tbody id="tbody1" class="t120-h">
</tbody>
</table>


  <a href="javascript:Agrega1()" class="btnl material-icons md-36" >add_circle</a>

             {!!Form::hidden('type','asesor')!!}
  
<a href="curriculum8" class=" btnf" >Aceptar</a>          
    
    {!!Form::close()!!}

@stop