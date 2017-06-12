<?php
include ('conexion.php');

mysqli_query($conexion,"CREATE DATABASE ".$baseDatos) or die ('No se puede crear la base de datos: '. mysqli_error($conexion));

mysqli_select_db($conexion, $baseDatos) or die ('No se puede seleccionar la base de datos: '. mysqli_error($conexion));

$sql="
CREATE TABLE noticias(
 id INT NOT NULL AUTO_INCREMENT,
 imagen varchar(100) null, 
 noticia text,
 seccion int,
 fecha date null,
 primary key(id)
)
";

mysqli_query($conexion,$sql) or die ('No se puede crear la tabla: '. mysqli_error($conexion));

$sql="
CREATE TABLE usuarios(
 id INT NOT NULL AUTO_INCREMENT,
 nombre varchar(30) null,
 usuario varchar(30),
 pass varchar(30),
 permisos int(1),
 imagen varchar(100) null,
 fecha date null,
 primary key(id)
)
";

mysqli_query($conexion,$sql) or die ('No se puede crear la tabla: '. mysqli_error($conexion));

?>