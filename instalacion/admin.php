<?php 
session_start();
if (isset($_SESSION['nombre'])and ($_SESSION['permisos']==1)){
	echo 'Bienvenido '.$_SESSION['nombre'].'<br>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="texto"></label>
    <textarea name="texto" cols="50" rows="12" id="texto"></textarea>
  </p>
  <p>
    <label for="seccion">Seccion:</label>
    <input type="text" name="seccion" id="seccion" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
</body>
</html>
<?php 
	include "conexion.php";
	
	mysqli_select_db($conexion, $baseDatos) or die ('No se puede seleccionar la base de datos: '. mysqli_error($conexion));
	if(isset($_POST['texto'])and isset($_POST['seccion'])){
		$noticia=$_POST['texto'];
		$seccion=$_POST['seccion'];
		$sql="DELETE FROM noticias where seccion=$seccion";
		mysqli_query($conexion,$sql) or die ('No se puede borrar la noticia: '. mysqli_error($conexion));
		$sql="INSERT INTO noticias (noticia,seccion) VALUES ('".$noticia."','".$seccion."')";
		mysqli_query($conexion,$sql) or die ('No se puede insertar la noticia: '. mysqli_error($conexion));
	}else{
		echo 'Debe escribir la noticia y la sección <br>';
	}
?>
<a href="../index.php">Ir a principal </a>
<?php 
}
?>
		
		
