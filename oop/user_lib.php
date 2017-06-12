<?php 
include '../instalacion/conexion_oop.php';
class user{
	function pidodatos($nom,$passw){
		$usrBase=new BaseDatos;
		$sql="SELECT * FROM usuarios WHERE usuario='$nom' AND pass='$passw'";
		$res=$usrBase->seleccionar($sql);
		if ( !$res ) {
			echo "Query failed: ";
			return false;
		}
		$fila=$res->fetch_array();
		
		if ($fila['usuario']<>""){
			$es_usuario=true;
			$_SESSION['user']=$nom;
			$_SESSION['pass']=$passw;
			$_SESSION['nombre']=$fila['nombre'];
			$_SESSION['permisos']=$fila['permisos'];
		}else{
			$es_usuario=false;
			echo 'Área restringida. Sólo para usuarios';
		}
		return $es_usuario;
	}
}
?>