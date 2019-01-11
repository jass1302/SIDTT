   {{Form::label('Grupo')}}
   {!!Form::text('grupo',null,['class'=>'form-control','placeholder'=>'3CM1'])!!}
   {!!Form::label('Unidad de Aprendizaje')!!}
   {!!Form::select('unidad', ['Trabajo Terminal I' => 'Trabajo Terminal 1', 'Trabajo Terminal II' => 'Trabajo Terminal 2'], null, ['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}
   {!!Form::label('Docente Titular')!!}
   {!!Form::select('d_titular',$docentes, null, ['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}
   {!!link_to_route('admin.unidades.create', $title = 'Ver currículo', $attributes = ['class'=>'btn btn-primary'])!!} 
   {!!Form::label('Periodo')!!}
   {!!Form::text('periodo',null,['class'=>'form-control'])!!}
   {{Form::label('Fecha')}}