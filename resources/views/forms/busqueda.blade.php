{!! Form::open(array('route' => 'buscando', 'class'=>'form navbar-form navbar-right searchform')) !!}
<div class="form-row">
 <div class="form-group col-6">
  {!! Form::text('buscar', null,array('required','class'=>'form-control-plaintext','placeholder'=>'Buscar...(No funciono aun)'))!!}
</div>
<div class="form-group col-2">
  {!! Form::submit('search',array('class'=>'material-icons')) !!}
  {!! Form::submit('Buscar', array('class'=>' ')) !!}
</div>
 {!!Form::close()!!}