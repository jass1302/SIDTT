@extends('layouts.perfilesdocente')
<title>SIDTT - Docente</title>
@section('contenido-perfil')

 @if(Session::has('message'))
  <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {{Session::get('message')}}
  </div>
  @endif
<script type="text/javascript">
function Menu(){ 

       document.getElementById("alumnos").className+=" active";
   document.getElementById("UA").className+=" active";
}
</script>
<div class="ven-title"> 
  <h7>Alumnos</h7>
</div>
{!!Form::open()!!}
<div class="form-row">
 <div class="form-group col-6">
   

  {!!Form::text('buscar',null,['class'=>'form-control-plaintext','placeholder'=>'Buscar...'])!!}
{!!Form::close()!!}
</div>
<div class="form-group col-2">
  {!!link_to_route('admin.alumnos.create', $title = ' search ',null,$attributes = ['class'=>'material-icons'])!!}
 {!!link_to_route('admin.alumnos.create', $title = ' Buscar ',null,$attributes = ['class'=>' '])!!}

</div>
   
 </div>

  <table id="table-scroll-crud">
<thead>
<tr>
   <th class="t15" >
         {!!Form::label('Boleta')!!} 
</th>
      <th class="t40">{!!Form::label('Alumno')!!} </th>
      
   
  <th class="t10">
         {!!Form::label('Tipo')!!}
  </th>
    <th class="t35">
         {!!Form::label('Proyecto')!!}
  </th>
    

</tr>
</thead>
<tbody id="tbody" class="t300-h">
 

  <tr>
    <td class="t15">
     
    </td>
    <td class="t40"></td>

    <td class=""><select class='form-control' name='nivel'><option value='0'>A</option><option value='1'>B</option></select></td>
    <td class="t35"></td>
   


  </tr>

  </tbody>
</table>

 @stop 