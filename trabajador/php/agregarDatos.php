<?php 
session_start();
	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$p=$_POST['appat'];
	$m=$_POST['apmat'];
	$s=$_POST['nss'];
	$t=$_POST['telefono'];

	$sql="INSERT into t_persona (nombre,appat,apmat,nss,telefono)
								values ('$n','$p','$m','$s','$t')";
	echo $result=mysqli_query($conexion,$sql);

 ?>