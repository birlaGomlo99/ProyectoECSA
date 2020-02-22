<?php
include 'conex.php';
$id=  $_GET['id'];
//$oldfile=	 $_POST['oldfile'];

	$sql= "DELETE evidencia from evidencia where id_evi=".$id;
		
	if($mysqli->query($sql)=== TRUE){
	//unlink($oldfile);
	header('Location: listarpub.php');
}else{
	echo "A ocurrido un error al eliminar los datos verifique su conexión a internet o vuelva a intentarlo más tarde :(";
	

}
?>