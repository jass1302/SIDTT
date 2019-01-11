@extends('layouts.curriculum')

<title>SIDTT - Curriculum/Titulos</title>

@section('contenidos')
    <h2> Titulos </h2>

{!!Form::open(['route'=>'registro.store', 'method'=>'POST'])!!}
<table   id="table-scroll-crud">
<thead>
<tr>
   <th class="t15 " >
         {!!Form::label('Cédula Profesional')!!}
</th>
      <th class="t20">{!!Form::label('Nivel')!!} </th>
      <th class="t40" >
         {!!Form::label('Titulo')!!}
  </th>
      <th class="t10">
         {!!Form::label('Siglas')!!}
  </th>
   <th class="t10">
         {!!Form::label('Activo')!!}
  </th>
  <th class="t10"> </th>
</tr>
</thead>
<tbody id="tbody" class="t120-h">
</tbody>
</table>

<script type="text/javascript">
function Menu(){ 
       var t= document.getElementById("Tituls");
 t.className+=" active";
 for (var i = 0; i <= 1; i++) {
 Agrega();
 }
    Agrega1();   
}
  function Agrega(){
var TR= document.createElement("tr");
var TD1=document.createElement("td");
var TD2=document.createElement("td");
var TD3=document.createElement("td");
var TD4=document.createElement("td");
var TD5=document.createElement("td");
TD1.className="t15";
TD1.innerHTML="<input class='form-control' placeholder='ej:4251852455' name='ced' type='text'>";
TD2.className="t20";
TD2.innerHTML="<select class='form-control' name='nivel'><option value='0'>Doctorado</option><option value='1'>Maestria</option><option value='2'>Licenciatura</option></select>";
TD3.className="t40";
TD3.innerHTML="<input class='form-control' placeholder='ej:Administración Empresarial' name='titu' type='text'>";
TD4.className="t10";
TD4.innerHTML="<input class='form-control' placeholder='ej:A.en E.'' name='sigls' type='text'>";
TD5.className="t10";
TD5.innerHTML="<input class='form-control-lg' name='name' type='checkbox' value='value' id='area52'>";
TR.appendChild(TD1);
TR.appendChild(TD2);
TR.appendChild(TD3);
TR.appendChild(TD4);
TR.appendChild(TD5);
 
document.getElementById("tbody").appendChild(TR)
}
</script>


   <!-- <td class="sm ">Titulo Profesional que se utliza actualmente  </td>
      </tr>-->

 
 <a href="javascript:Agrega()" class="btnl material-icons md-36" >add_circle</a>


    <?php
      $statusList[0]='Doctorado';
      $statusList[1]='Maestria';
      $statusList[2]='Licenciatura';
      ?>

 <!--
         {!!  Form::select('nivel', $statusList, null, array('class' => 'form-control') )!!}-->


<div id="espec">
<table    id="table-scroll-crud">
<thead>
<tr>
   <th class="t100" >
         {!!Form::label('Especialidad')!!}
</th>
      
</tr>
</thead>
<tbody id="tbody1" class="t120-h">
</tbody>
</table>

<script type="text/javascript">
  function Agrega1(){
var TR= document.createElement("tr");
var TD1=document.createElement("td");
TD1.className="t100";
TD1.innerHTML="<input class='form-control' placeholder='ej:Redes Computacionales' name='ced' type='text'>";
TR.appendChild(TD1);
 
document.getElementById("tbody1").appendChild(TR)
}
</script>
<a href="javascript:Agrega1()" class="btnl material-icons md-36" >add_circle</a>
</div>

             {!!Form::hidden('type','asesor')!!}
  
<a href="curriculum3" class=" btnf" >Siguiente</a>              
    
    {!!Form::close()!!}

@stop