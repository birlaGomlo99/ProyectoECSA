<?php

$mysqli = new mysqli('localhost','root','','pruebas');
$mysqli->set_charset('utf8');
if(!$mysqli){
	die('no se pudo conectar : '.mysql_error());
}

?>