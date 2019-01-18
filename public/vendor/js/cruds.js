function actualizar(){
	alert("actualizar");
	var vid = $("#idU").val();
    var route = "../../administrador/unidades/"+vid;
	var varUAP = $("#uap").val();
	var varGrupo = $("#grupo").val();
	var varDocente = $("#docente").val();
	var varPeriodo = $("#periodo").val();
	var varFechIn = $("#inicio").val();
	var varFechFn = $("#fin").val();
	var token = $("#token").val();
	//var varCodigo
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{ uap: varUAP, grupo: varGrupo, docente: varDocente,periodo: varPeriodo, inicio: varFechIn, fin: varFechFn, idU: vid },
		//error:function(p1,p2,p3){
		//	alert("Error: "+p2);
		//},
		//success:function(respuesta,estado,jqxhr){
			//alert("Exito: "+respuesta);
		//	actionReadAJAX();
		//}
	});
	
}
function guardar(){

	var route = "../../administrador/unidades";
	var varUAP = $("#nuap").val();
	var varGrupo = $("#ngrupo").val();
	var varDocente = $("#ndocente").val();
	var varPeriodo = $("#nperiodo").val();
	var varFechIn = $("#ninicio").val();
	var varFechFn = $("#nfin").val();
	var token = $("#token").val();
	//var varCodigo
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{ nuap: varUAP, ngrupo: varGrupo, ndocente: varDocente, nperiodo: varPeriodo, ninicio: varFechIn, nfin: varFechFn},
		//error:function(p1,p2,p3){
		//	alert("Error: "+p2);
		//},
		//success:function(respuesta,estado,jqxhr){
			//alert("Exito: "+respuesta);
		//	actionReadAJAX();
		//}
	});
	
}
function borrar(){
	var vid = $("#idU").val();
	alert(vid);
	var route = "../../administrador/unidades/"+vid;
	var token = $("#token").val();
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		data:{},
		//error:function(p1,p2,p3){
		//	alert("Error: "+p2);
		//},
		//success:function(respuesta,estado,jqxhr){
			//alert("Exito: "+respuesta);
		//	actionReadAJAX();
		//}
	});

}

