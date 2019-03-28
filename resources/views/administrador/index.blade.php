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
  <button id="addBtn" class="btn  material-icons" type="button" name="add" >add</button>
           <table class="table table-hover fixed_headers ">
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


  <tr id="new">
    <td name="clave"   class="editeable"> 
      {!!Form::text('clave')!!}</td>
 <td name="ua" >{!!Form::select('unidad',$unid)!!}
    </td>
    <td name="group"  class="editeable"> {!!Form::text('group')!!} </td>
    <td  title="name"  > 
    <div class="input-group">
   {!!Form::select('d_titular',$docentes)!!}

  <div class="input-group-append">
    <button class="btn btn-outline-secondary material-icons" type="button" name="curriculum" >assignment_ind</button>
  </div>
</div>  

    </td>
   <td name="periodo"  class="editeable"> 
    {!!Form::text('periodo')!!}
   </td>
    <td  title="date">
      {!!Form::date('fecha_in')!!}
  
    </td>
    <td  title="date">
       {!!Form::date('fecha_fin')!!}
     <td title="state" >

</td>
<td  name="actions">
      <button  type="button" class="btn btn-info Btn1">
       <i  name="bedit" class=" material-icons" title="Editar" >save</i>
       </button>
    <button type="button" id="delete" class="btn btn-danger Btn2">
     <i name="bdelete" class=" material-icons" title="Desactivar">close</i>
    </button> 

  </tr>
</thead>
 <tbody>

    @foreach($uni as $u)
    <script type="text/javascript">

  
  $( document ).ready(function() {


    $("tbody input, tbody select, button#curriculum").attr('disabled',true);
    $("thead input, thead select").attr('class','form-control');
    $("#new").hide();

});
 $('#addBtn').on('click', function ()
  {
$("#new").show();
$("button[name='add']").attr('disabled',true);

  });

function save(btnId){

var clave = $("tr#"+btnId+" input[name='clave']").val(); 
var unidad = $("tr#"+btnId+" select[name='unidad'] option:selected").val(); 
var group = $("tr#"+btnId+" input[name='group']").text(); 
var d_titular = $("tr#"+btnId+" select[name='d_titular'] option:selected").val(); 
var periodo = $("tr#"+btnId+" input[name='periodo']").text(); 
var date = new Date($("tr#"+btnId+" input[type='date'][name='fecha_in']").val());
  var day = date.getDate()+ 1;
  var month = date.getMonth() + 1;
  var year = date.getFullYear();
var datein =([day, month, year].join('/'));
  var date = new Date($("tr#"+btnId+" input[type='date'][name='fecha_fin']").val());
  var day = date.getDate()+ 1;
  var month = date.getMonth() + 1;
  var year = date.getFullYear();
  var datefin=([day, month, year].join('/'));
  //reset values 
alert(datefin);
if(btnId=="new")
{
  $("tr#"+btnId+" input").val("");  

  $("tr#"+btnId).hide();

$("button[name='add']").attr('disabled',false);
}
}

 

$(document).ready(function(){
    $('.Btn1').on('click',function(){
      //Comprobar si se editara o guardara
      var btnId = $(this).closest("tr").attr('id');

if ( $("tr#"+btnId+" td[name='clave']").attr('contentEditable')=="false") //Editar
{
  
    $( "tr#"+btnId+" i[name='bedit']" ).html( 'save' );
    $( "tr#"+btnId+" i[name='bdelete']" ).html( 'close' );
    $("tr#"+btnId+" input,tr#"+btnId+" select").attr('disabled',false);
    $("tr#"+btnId+" button[name='curriculum']").attr('disabled',false);
    $("tr#"+btnId+" select,tr#"+btnId+" input").attr('class','form-control');

    $("tr#"+btnId+" td[name='clave']").attr('contentEditable',true);
    $(this).stop();
}
else //Guardar
{
  if(btnId!="new"){
  $("tr#"+btnId+" td[name='clave']").attr('contentEditable',false);
    $( "tr#"+btnId+" i[name='bedit']" ).html( 'edit' );
    $( "tr#"+btnId+" i[name='bdelete']" ).html( 'block' );
    
       $("tr#"+btnId+" input,tr#"+btnId+" select").attr('disabled',true);
    $("tr#"+btnId+" button[name='curriculum']").attr('disabled',true);
    $("tr#"+btnId+" select,tr#"+btnId+" input").attr('class','');
    }
     save(btnId);
     $(this).stop();
}

        
    });  
  
    $('.Btn2').on('click',function(){
      //Comprobar si se borra o cancela
      var btnId = $(this).closest("tr").attr('id');

if ( $("tr#"+btnId+" td[name='clave']").attr('contentEditable')=="false") //Borrar o desactivar
{
  
    //desactivar o activar al usuario
    $(this).stop();
}
else //cancel
{ 
  if(btnId!="new")
  {
  $("tr#"+btnId+" td[name='clave']").attr('contentEditable',false);
    $( "tr#"+btnId+" i[name='bedit']" ).html( 'edit' );
    $( "tr#"+btnId+" i[name='bdelete']" ).html( 'block' );
    $("tr#"+btnId+" input,tr#"+btnId+" select").attr('disabled',true);
    $("tr#"+btnId+" button[name='curriculum']").attr('disabled',true);
     $("tr#"+btnId+" select,tr#"+btnId+" input[type='date']").attr('class','');
    
   }else{
      $("tr#"+btnId+" input").val("");  

  $("tr#"+btnId).hide();

$("button[name='add']").attr('disabled',false);

   }
    $(this).stop();
}

        
    });  
  });
</script>


   <tr id="{{$u->idUnidad_Aprendizaje}}">
    <td name="clave"   contentEditable="false" class="editeable"> {!!Form::text('clave')!!}</td>
 <td name="ua" >{!!Form::select('unidad',$unid, $unid[$u->tipo])!!}
    </td>
    <td name="group"  class="editeable"> {!!Form::text('group',$u->grupo)!!}</td>
    <td  name="name"  > 
    <div class="input-group">
   {!!Form::select('d_titular',$docentes, $u->d_titular)!!}
  <div class="input-group-append">
    <button id="curriculum" class="btn btn-outline-secondary material-icons" type="button" name="curriculum" >assignment_ind</button>
  </div>
</div>  
    </td>
   <td  name="periodo" class="editeable">{!!Form::text('periodo',$u->periodo)!!}</td>
    <td  title="date">
      {!!Form::date('fecha_in',\Carbon\Carbon::parse($u->fecha_ini)->format('Y-m-d'))!!}
  
    </td>
    <td  title="date">
       {!!Form::date('fecha_fin',\Carbon\Carbon::parse($u->fecha_ini)->format('Y-m-d'))!!}
     <td title="state" >
  @if($u->deleted_at == null)
  <label>Activo</label>
  @else
  <label>Inactivo</label>
  @endif
</td>
<td  name="actions">
   <button  type="button" class="btn btn-info Btn1">
       <i  name="bedit" class=" material-icons" title="Editar" >edit</i>
       </button>
    <button type="button" id="delete" class="btn btn-danger Btn2">
     <i name="bdelete" class=" material-icons" title="Desactivar">block</i>
    </button> 
    </td>
         @csrf
  </tr>
  @endforeach
</tbody>
</table>
{{ $uni->links() }}
</div>
</div>

 @stop 