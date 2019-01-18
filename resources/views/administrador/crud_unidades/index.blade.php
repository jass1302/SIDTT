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

{!! Form::open() !!}
  <tr id="new">
    <td name="clave"   class="editeable"> 
      {!!Form::text('clave',null,['id'=>'nclave'])!!}
    </td>
 <td name="ua" >{!!Form::select('unidad',$unid,null,['id'=>'nuap'])!!}
    </td>
    <td name="group"  class="editeable"> {!!Form::text('group',null,['id'=>'ngrupo'])!!} </td>
    <td  title="name"  > 
    <div class="input-group">
   {!!Form::select('d_titular',$docentes,null,['id'=>'ndocente'])!!}

  <div class="input-group-append">
    <button class="btn btn-outline-secondary material-icons" type="button" name="curriculum" >assignment_ind</button>
  </div>
</div>  

    </td>
   <td name="periodo"  class="editeable"> 
    {!!Form::text('periodo',null,['id'=>'nperiodo'])!!}
   </td>
    <td  title="date">
      {!!Form::date('fecha_in',null,['id'=>'ninicio'])!!}
  
    </td>
    <td  title="date">
       {!!Form::date('fecha_fin',null,['id'=>'nfin'])!!}
     <td title="state" >

</td>
<td  name="actions">
       {{ FORM::button('<i  name="bedit" class=" material-icons" title="Editar" >save</i>',['class'=>'btn btn-info Btn1','type'=>'button','id'=>'crear']) }}
       {{ FORM::button('<i  name="bdelete" class=" material-icons" title="Desactivar" >close</i>',['class'=>'btn btn-danger Btn2','type'=>'button','id' => 'delete']) }}
  </tr>
  {!! Form::close() !!}
</thead>
 <tbody>

    @foreach($uni as $u)


{!! Form::open() !!}
  <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
  <input type="hidden" name="idU" value="{{ $u->idUnidad_Aprendizaje}}" id="idU">
   <tr id="{{$u->idUnidad_Aprendizaje}}">
    <td name="clave"   contentEditable="false" class="editeable"> {!!Form::text('clave')!!}</td>
 <td name="ua" >{!!Form::select('unidad',$unid, $unid[$u->tipo],['id' => 'uap'])!!}
    </td>
    <td name="group"  class="editeable"> {!!Form::text('group',$u->grupo,['id' => 'grupo'])!!}</td>
    <td  name="name"  > 
    <div class="input-group">
   {!!Form::select('d_titular',$docentes, $u->d_titular,['id' => 'docente'])!!}
  <div class="input-group-append">
    <button id="curriculum" class="btn btn-outline-secondary material-icons" type="button" name="curriculum" >assignment_ind</button>
  </div>
</div>  
    </td>
   <td  name="periodo" class="editeable">{!!Form::text('periodo',$u->periodo,['id' => 'periodo'])!!}</td>
    <td  title="date">
      {!!Form::date('fecha_in',\Carbon\Carbon::parse($u->fecha_ini)->format('Y-m-d'),['id' => 'inicio'])!!}
    </td>
    <td  title="date">
       {!!Form::date('fecha_fin',\Carbon\Carbon::parse($u->fecha_fn)->format('Y-m-d'),['id' => 'fin'])!!}
     <td title="state" >
  @if($u->deleted_at == null)
  <label>Activo</label>
  @else
  <label>Inactivo</label>
  @endif
</td>
<td  name="actions">
  {{ FORM::button('<i  name="bedit" class=" material-icons" title="Editar" >edit</i>',['class'=>'btn btn-info Btn1','type'=>'button','id'=>'crear']) }}
  {{ FORM::button('<i name="bdelete" class=" material-icons" title="Desactivar">block</i>',['class'=>'btn btn-danger Btn2','type'=>'button','id' => 'delete']) }} 
    </td>
         @csrf
  </tr>
  {!! Form::close() !!}
  @endforeach
</tbody>
</table>
{{ $uni->links() }}
</div>
</div>
<script type="text/javascript">
 
    $("tbody input, tbody select, button#curriculum").attr('disabled',true);
    
    $("thead input, thead select").attr('class','form-control');
    $("#new").hide();

    $("td[name='pass'], th[name='pass']").hide();
    $("td[name='state'], th[name='state']").show();

    $('#addBtn').on('click', function (){
      $("#new").show();
      $("td[name='pass'], th[name='pass']").show();
      $("td[name='state'], th[name='state']").hide(); 
      bloqueo('new');
    });

    $('.Btn1').on('click',function(){
      //Comprobar si se editara o guardara
      var btnId = $(this).closest("tr").attr('id');

if ( $("tr#"+btnId+" td[name='clave']").attr('contentEditable')=="false") //Editar
{

bloqueo(btnId);

$("button[name='add']").attr('disabled',true);
    $( "tr#"+btnId+" i[name='bedit']" ).html( 'save' );
    $( "tr#"+btnId+" i[name='bdelete']" ).html( 'close' );
    $("tr#"+btnId+" button[name='curriculum']").attr('disabled',false);
    $("tr#"+btnId+" input,tr#"+btnId+" select").attr({
      disabled:false,
      class:'form-control'});
    $("td[name='pass'], th[name='pass']").show();
     $("td[name='state'], th[name='state']").hide();
     $("tr#"+btnId).attr('onclick','actualizar()');
    $("tr#"+btnId+" td[name='clave']").attr('contentEditable',true);
    stop();
}
else //Guardar
{
  if(btnId!="new"){
  $("tr#"+btnId+" td[name='clave']").attr('contentEditable',false);
    $( "tr#"+btnId+" i[name='bedit']" ).html( 'edit' );
    $( "tr#"+btnId+" i[name='bdelete']" ).html( 'block' );
    $("tr#"+btnId+" input,tr#"+btnId+" select").attr({
      disabled:true,
      class:''});
    $("tr#"+btnId+" button[name='curriculum']").attr('disabled',true);
       $("tr#"+btnId).attr('onclick','actualizar()');
    }
     save(btnId);
     desbloqueo();
     stop();
}

        
    });  
  
    $('.Btn2').on('click',function(){
      //Comprobar si se borra o cancela
      var btnId = $(this).closest("tr").attr('id');

if ( $("tr#"+btnId+" td[name='clave']").attr('contentEditable')=="false") //Borrar o desactivar
{
  
     $("tr#"+btnId).attr('onclick','borrar()');
    //desactivar o activar al usuario
    stop();
}
else //cancel
{ 
  if(btnId!="new")
  {
  $("tr#"+btnId+" td[name='clave']").attr('contentEditable',false);
    $( "tr#"+btnId+" i[name='bedit']" ).html( 'edit' );
    $( "tr#"+btnId+" i[name='bdelete']" ).html( 'block' );
     $("tr#"+btnId+" input,tr#"+btnId+" select").attr({
      disabled:true,
      class:''});
      $("tr#"+btnId+" button[name='curriculum']").attr('disabled',true);
     $("tr#"+btnId+" select,tr#"+btnId+" input[type='date']").attr('class','');
   }else{
      $("tr#"+btnId+" input").val("");  
  $("tr#"+btnId).hide();
   }
   desbloqueo();

   $("td[name='pass'], th[name='pass']").hide();
    $("td[name='state'], th[name='state']").show();

   stop();
}

    });


 

function bloqueo(btnId){
//Bloquear el resto de los botones, excepto el de la linea que se usara
  $("button[name='add']").attr('disabled',true);
  $(".Btn1,.Btn2").attr('disabled',true);
$("#"+btnId+" .Btn1,#"+btnId+" .Btn2").attr('disabled',false);
}
function desbloqueo()
{
   $(".Btn1,.Btn2").attr('disabled',false);
     $("button[name='add']").attr('disabled',false);
}

function save(btnId){
if(btnId=="new")
{
  $("tr#"+btnId+" input").val("");  
  $("tr#"+btnId).hide();
$("button[name='add']").attr('disabled',false);
 $("tr#"+btnId).attr('onclick','guardar()');
}

$("td[name='pass'], th[name='pass']").hide();
    $("td[name='state'], th[name='state']").show();
}

</script>
 @stop 