@extends('layouts.curriculum')

<title>SIDTT - Curriculum/Titulos</title>

@section('contenidos')
<h2> Trabajo en Industria </h2>
{!!Form::open(['route'=>'registro.store', 'method'=>'POST'])!!}

<table   id="table-scroll">
<thead>
<tr>
   <th class="t20" >
         {!!Form::label('Periodo')!!}
</th>
      <th class="t25">{!!Form::label('Empresa')!!} </th>
      
      <th class="t45">
         {!!Form::label('Descripción')!!}
  </th>
</tr>
</thead>
<tbody id="tbody" class="t300-h">
</tbody>
</table>
<script type="text/javascript">
function Menu(){
       var T= document.getElementById("Industria");
 T.className+=" active";
for (var i = 0; i <= 4; i++) {
 Agrega();
 }
}
  function Agrega(){
var TR= document.createElement("tr");
 
var TD1=document.createElement("td")
var TD2=document.createElement("td")
var TD4= document.createElement("td")
TD1.className="t25";
TD1.innerHTML="<input class='form-control' placeholder='' name='fechapub' type='text'>";
TD2.className="t25";
TD2.innerHTML="<input class='form-control' placeholder='' name='fecapub' type='text'>";
TD4.className="t45";
TD4.innerHTML="<textarea class='form-control' rows='auto' placeholder='' name='fecapub' type='textarea'></textarea>";
TR.appendChild(TD1);
TR.appendChild(TD2);
TR.appendChild(TD4);
 
document.getElementById("tbody").appendChild(TR)
}
</script>



 <a href="javascript:Agrega()" class="btnl material-icons md-36" >add_circle</a>

             {!!Form::hidden('type','asesor')!!}
  
<a href="curriculum8" class=" btnf" >Siguiente</a>            
    
    {!!Form::close()!!}

@stop