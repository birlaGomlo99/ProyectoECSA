<?php

include 'conex.php';

$id=$_POST['id'];
$tiempo=   $_POST['tiempo'];
$_FILES['imagen'] = str_replace(" ", "", $_FILES['imagen']);
$ruta_archivo= "imagenes/".$_FILES['imagen'] ['name'];

if(move_uploaded_file($_FILES['imagen'] ['tmp_name'], $ruta_archivo)){
	echo "el fichero se subio correctamente.\n";
}else{
	echo "no se realizo correctamente la operacion.\n";
}

if ($_FILES['imagen'] ['name'] != ""){
	$sql= "UPDATE evidencia set tiempo='$tiempo', imagen='$ruta_archivo' where id_evi=".$id;
		//unlink($oldfile);
}else{
	$sql= "UPDATE evidencia set tiempo='$tiempo' where id_evi=".$id;
}

if($mysqli->query($sql)=== TRUE){

	echo"<script>alert('Los datos de la evidencia se han modificado correctamente :)')</script>";
	echo "<script>location.href='index.php'</script>";

}else{
	
	echo"<script>alert'Error al modificar verifique su conexión a internet o vuelva a intentarlo más tarde :(')</script>";
}

?>







