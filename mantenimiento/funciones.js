

function agregardatos(st,folio,edificio,solicitante,fsol,fres,fat,estatus){

	cadena="st=" + st + 
			"&folio=" + folio +
			"&edificio=" + edificio +
			"&solicitante=" + solicitante +
			"&fsol=" + fsol +
			"&fres=" + fres +
			"&fat=" + fat +
			"&estatus=" + estatus;



	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$("#formulario")[0].reset();
				$('#tabla').load('tab/tabla.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idman').val(d[0]);
	$('#stu').val(d[1]);
	$('#foliou').val(d[2]);
	$('#edificiou').val(d[3]);
	$('#solicitanteu').val(d[4]);
	$('#fsolu').val(d[5]);
	$('#fresu').val(d[6]);
	$('#fatu').val(d[7]);
	$('#estatusu').val(d[8]);

	
}

function actualizaDatos(){


	id=$('#idman').val();
	st=$('#stu').val();
	folio=$('#foliou').val();
	edificio=$('#edificiou').val();
	solicitante=$('#solicitanteu').val();
	fsol=$('#fsolu').val();
	fres=$('#fresu').val();
	fat=$('#fatu').val();
	estatus=$('#estatusu').val();


	cadena="id=" + id + 
			"&st=" + st +
			"&folio=" + folio +
			"&edificio=" + edificio +
			"&solicitante=" + solicitante +
			"&fsol=" + fsol +
			"&fres=" + fres +
			"&fat=" + fat +
			"&estatus=" + estatus;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('tab/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('tab/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}