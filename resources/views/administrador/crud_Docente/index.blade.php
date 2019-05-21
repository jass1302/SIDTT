@extends('layouts.perfiles')
<title>Administrador - Docente</title>
@section('contenido-perfil')

@if(Session::has('message'))
  <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {{Session::get('message')}}
  </div>
  @endif

<input id="PageN" type="hidden" name="Docentes">

<div class="title-l"> 
  <h7>Docentes</h7>
</div>

<div class="wrapped">
  <button id="addBtn" class="btn  material-icons" type="button" name="add" >add</button>
 <table class="table table-hover fixed_headers">
<thead>
<tr>
   <th   name="clave" >
         {!!Form::label('No. Trabajador')!!}
</th>
      <th  name="name">
        {!!Form::label('Docente')!!} 
      </th>
     <th  name="academia">
        {!!Form::label('Academia')!!} 
      </th> 
      

<th   name="email">
  {!!Form::label('Correo')!!}
 
<th   name="pass">
  {!!Form::label('Contaseña')!!}
  
</th>
<th  name="state">
         {!!Form::label('Estado')!!}
  </th>
<th  name="actions">
 {!!Form::label('Acciones')!!}
  </th>
</tr>
<tr id="new">
   <td name="clave">
    {!!Form::text('clave')!!}
    </td>
    <td name="name" >{!!Form::text('name')!!}</td>
    <td name="academia" >{!!Form::text('academia')!!}</td>
    <td name="email" >{!!Form::email('email')!!} </td>
    <td name="pass" >{!!Form::text('pass')!!}</td>
    <td name="state" > </td>
    <td  name="actions" >
       {{ FORM::button('<i  name="bedit" class=" material-icons Btn1" name="Guardar" >save</i>',['class'=>'btn btn-info Btn1','type'=>'button','id'=>'crear']) }}
       {{ FORM::button('<i  name="bdelete" class=" material-icons Btn2" name="Cancelar" >close</i>',['class'=>'btn btn-danger Btn2','type'=>'button','id' => 'delete']) }}
    </td>
  </tr>

</thead>
<tbody >
    @foreach($usuario as $doc)

  <tr id="{{$doc->idUsuario}}">
    <td name="clave" contenteditable="false">
    {!!Form::text('clave',$doc->numerodet)!!}
    </td>
    <td name="name" >{!!Form::text('name',$doc->nombre." ".$doc->ape_pat." ".$doc->ape_mat)!!}</td>
       <td name="academia">{!!Form::text('academia',$doc->Academia)!!}</td>
    <td name="email" >
      {!!Form::email('email', $doc->email)!!}
    </td>
    <td name="pass" >
      {!!Form::password('pass')!!}
    </td>
    <td name="state" >
      @if($doc->deleted_at == null)
  <label>Activo</label>
  @else
  <label>Inactivo</label>
  @endif
    </td>
    <td  name="actions" >
       {{ FORM::button('<i  name="bedit" class=" material-icons Btn1" name="Editar" >edit</i>',['class'=>'btn btn-info Btn1','type'=>'button','id'=>'crear']) }}
       {{ FORM::button('<i  name="bdelete" class=" material-icons Btn2" name="Desactivar" >block</i>',['class'=>'btn btn-danger Btn2','type'=>'button','id' => 'delete']) }}
    </td>
     @csrf
  </tr>
  @endforeach
  </tbody>
</table>
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
     $("tr#"+btnId).attr('onclick','guardar()');
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
}

$("td[name='pass'], th[name='pass']").hide();
    $("td[name='state'], th[name='state']").show();
}

</script>
@stop