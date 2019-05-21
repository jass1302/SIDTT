<?php


//Enrutamiento al index y layout de la página
route::get('/','FrontEnd@index')->name('principal');
route::get('administrador','FrontEnd@administrador');
route::get('alumno','FrontEnd@alumno');
route::get('docente','FrontEnd@docente');
route::get('asesor','FrontEnd@asesor');
//Enrrutamiento al controlador de las vistas de registro

route::resource('registro','registro');
route::resource('registro2','registro2');
route::resource('registro3','registro3');
route::get('alumnoRegistro','registro@almn');
route::get('docenteRegistro','registro@doce');
route::get('asesorRegistro','registro@ext');
//Enrrutamiento al controlador del perfil de administrador
// administrador/
		
//administrador/alumnos
route::resource('/administrador/docentes','ctrlAdminDocente',['as'=>'admin']);
route::resource('/administrador/alumnos','ctrlAdminAlumno',['as'=>'admin']);
route::resource('/administrador/asesores','ctrlAdminAsesor',['as'=>'admin']);
route::resource('/administrador/unidades','ctrlAdminUnidades',['as'=>'admin']);
//...........
//Enrrutamiento al controlador de las vistas del usuario de tipo alumno
//Enrrutamiento al controlador de las vistas del usuario de tipo asesor
route::get('asesor/docs','aseController@documentos');
route::get('asesor/proyectos','aseController@proyectos');

//SearchBar
route::post('find','busquedaController@search')->name('buscando');
// Log|in-out|
route::resource('login','loginControll');
route::get('logout','loginControll@logout');

route::resource('newPass','NewPassControll');



//................................................
// Enrrutamiento temporal faltan controladores
route::get('recuperacion_contraseña',function(){
	return view('recup_contra');
});
route::get('documentos',function(){
	return view('forms.documentos');
});
route::get('uni',function(){
	return view('administrador.crud_unidades.index');
});
route::get('ase_docs',function(){
	return view('forms.documentos_asesor');
});
route::get('doc_docs',function(){
	return view('forms.documentos_docente');
});
route::get('registroproyecto',function(){
	return view('forms.registroP');
});
route::get('pro_doce',function(){
	return view('forms.proyecto_ua');
});
route::get('proyecto',function(){
	return view('forms.proyecto');
});
route::get('evaluacion',function(){
	return view('forms.evaluaciones');
});
route::get('ase_eva',function(){
	return view('forms.evaluaciones_asesor');
});
route::get('doc_eva',function(){
	return view('forms.evaluaciones_docente');
});
route::get('doce_sol',function(){
	return view('forms.solicitudes');
});
route::get('doce_al',function(){
	return view('forms.alumnos_doce');
});
// Curriculum
route::get('pro_ase',function(){
	return view('asesor.proyectos');
});
route::get('pro_ase_vi',function(){
	return view('forms.proyecto_asesor');
});
// Rutas temporales de curriculum
route::get('curriculum',function(){
	return view('curriculum.p1');
});
route::get('curriculum2',function(){
	return view('curriculum.p2');
});
route::get('curriculum3',function(){
	return view('curriculum.p3');
});
route::get('curriculum4',function(){
	return view('curriculum.p4');
});
route::get('curriculum5',function(){
	return view('curriculum.p5');
});
route::get('curriculum6',function(){
	return view('curriculum.p6');
});
route::get('curriculum7',function(){
	return view('curriculum.p7');
});
route::get('curriculum8',function(){
	return view('curriculum.p8');
});
//Enrutamiento de generación de PDFs
Route::get('anexo2',function(){
	$pdf = PDF::loadView('anexos.Anexo2');
	return $pdf->stream('anexo2.pdf');
});
Route::get('anexo3',function(){
	$pdf = PDF::loadView('anexos.Anexo3');
	return $pdf->stream('anexo3.pdf');
});
Route::get('anexo4',function(){
	$pdf = PDF::loadView('anexos.Anexo4');
	return $pdf->stream('anexo4.pdf');
});
Route::get('anexo5',function(){
	$pdf = PDF::loadView('anexos.Anexo5');
	return $pdf->stream('anexo5.pdf');
});
Route::get('anexo6',function(){
	$pdf = PDF::loadView('anexos.Anexo6');
	return $pdf->stream('anexo6.pdf');
});
Route::get('anexo8',function(){
	$pdf = PDF::loadView('anexos.Anexo8');
	return $pdf->stream('anexo8.pdf');
});
Route::get('anexo9',function(){
	$pdf = PDF::loadView('anexos.Anexo9');
	return $pdf->stream('anexo9.pdf');
});
Route::get('anexo10',function(){
	$pdf = PDF::loadView('anexos.Anexo10');
	return $pdf->stream('anexo10.pdf');
});
Route::get('anexo11',function(){
	$pdf = PDF::loadView('anexos.Anexo11');
	return $pdf->stream('anexo11.pdf');
});
Route::get('anexo12',function(){
	$pdf = PDF::loadView('anexos.Anexo12');
	return $pdf->stream('anexo12.pdf');
});
Route::get('anexo13',function(){
	$pdf = PDF::loadView('anexos.Anexo13');
	return $pdf->stream('anexo13.pdf');
});
Route::get('anexito4',function(){
	return view('anexos.anexo9');
});