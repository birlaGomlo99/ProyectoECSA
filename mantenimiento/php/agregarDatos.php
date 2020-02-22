<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$s=$_POST['st'];
	$f=$_POST['folio'];
	$e=$_POST['edificio'];
	$l=$_POST['solicitante'];
	$o=$_POST['fsol'];
	$m=$_POST['fres'];
	$t=$_POST['fat'];
	$u=$_POST['estatus'];
	

	$sql="INSERT into mantenimiento (folio_st,folio_fat,edificio,solicitante,fecha_solicitud,fecha_respuesta,fat,estatus)
								values ('$s','$f','$e','$l','$o','$m','$t','$u')";
	echo $result=mysqli_query($conexion,$sql);

 ?>