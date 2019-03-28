
  $( document ).ready(function() {
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
function Menu(){ 
var name=document.getElementById('PageN').name;
       document.getElementById(name).className+="active";
   
}

