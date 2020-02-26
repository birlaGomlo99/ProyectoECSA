<?php 
 session_start();
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['st'];
	$p=$_POST['folio'];
	$m=$_POST['edificio'];
	$s=$_POST['solicitante'];
	$t=$_POST['fsol'];
	$a=$_POST['fres'];
	$b=$_POST['fat'];
	$c=$_POST['estatus'];

	$sql="UPDATE mantenimiento set
								 folio_st='$n',
								folio_fat='$p',
								edificio='$m',
								solicitante='$s',
								fecha_solicitud='$t',
								fecha_respuesta='$a',
								fat='$b',
								estatus='$c'
								where id_man='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>