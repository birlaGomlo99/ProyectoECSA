<?php
include 'conex.php';

$tiempo= 	$_POST ['tiempo'];
$_FILES['imagen'] = str_replace(" ", "", $_FILES['imagen']);
$ruta_archivo= "imagenes/".$_FILES['imagen'] ['name'];

if(move_uploaded_file($_FILES['imagen'] ['tmp_name'], $ruta_archivo)){
  echo "el fichero se subio correctamente.\n";
}else{
  echo "no se realizo correctamente la operacion.\n";
}


$sql= "INSERT INTO evidencia (imagen, tiempo) VALUES('$ruta_archivo', '$tiempo')";


if ($mysqli -> query($sql)===TRUE){
	
	echo"<script>alert('Publicación registrado correctamente :)')</script>";	
	echo "<script>location.href='index.php'</script>";
} else{
	echo"<script>alert('Error al registrar puede que el producto ya exista o verifique su conexión a internet y vuelva a intentarlo más tarde :( ')</script>";
}


?>