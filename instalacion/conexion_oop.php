<?php
// DB.class.php

class BaseDatos {
	var $host = 'localhost';
	var $usuario = 'root';
	var $pass = 'jamesbond';
	var $nomBase = 'autonomo';
	// Open a connect to the database.
	// Make sure this is called on every page that needs to use the database.
	function conectar() {
		$conexion=new mysqli($this->host,$this->usuario,$this->pass,$this->nomBase);
		if ( mysqli_connect_errno() ) {
			echo "Connection failed: ".mysqli_connect_error();
			return false;
		}
		return $conexion;
	}
	//--------------------------------------------------------------------
	function seleccionar($consulta){
		$conexion=$this->conectar();
		$resultado = $conexion->query($consulta);
    	if(!$resultado){ 
      		echo 'MySQL Error: ' . mysql_error();
      		exit;
    	}
    	return $resultado;
  	}
  //-----------------------------------------------------------------------  
}
?>