<?php
$host='localhost';
$user ='root';
$pass = '';
$baseDatos='autonomo';

$conexion = mysqli_connect($host,$user,$pass)
	or die ('No se pudo establecer la conexión'.mysqli_error());
?>