
<?php 
 session_start();
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from mantenimiento where id_man='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>