<?php

session_start();
require_once "../../evidencia/conex.php";


$username=$_POST['user'];
$pass=sha1($_POST['password']);



	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$sql2=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE user='$username' and password='$pass'");
if($f2=mysqli_fetch_assoc($sql2)){
	if($pass==$f2['pasadmin']){
		$_SESSION['id']=$f2['id'];
		$_SESSION['user']=$f2['user'];
		$_SESSION['rol']=$f2['rol'];

		

		echo '<script>alert("Bienvenido administrador")</script> ';
		echo "<script>location.href='../../admin/header.php'</script>";
		
	}
}


$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE user='$username'");
if($f=mysqli_fetch_assoc($sql)){
	if($pass==$f['password']){
		$_SESSION['id']=$f['id'];
		$_SESSION['user']=$f['user'];
		$_SESSION['rol']=$f['rol'];

	
			//header("Location: ../index.php");
		echo "<script>window.location='../../usuario/header/header.php'</script>";

	}else{
		echo '<script>alert("Contraseña incorrecta")</script> ';
		header("Location: ../index.php");
		
	}
}else{
	
	echo '<script>alert("El usuario no existe")</script> ';
	
	echo "<script>location.href='../index.php'</script>";	

}


?>