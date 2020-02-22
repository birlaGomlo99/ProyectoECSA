<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$p=$_POST['appat'];
	$m=$_POST['apmat'];
	$s=$_POST['nss'];
	$t=$_POST['telefono'];

	$sql="UPDATE t_persona set nombre='$n',
								appat='$p',
								apmat='$m',
								nss='$s',
								telefono='$t'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>