<?php 
	class conexionphp 
	  {
	  	/**
	  	 * [conectar funcion de coneccion a BD]
	  	 * @return [type] [cadena de coneccion]
	  	 */
	  	 function conectar(){
	  	//$db = new mysqli("localhost","mjplay","123","testamento");
	 	$db = new mysqli("localhost","root","123","mjplay");
	  	  return $db;	  	 	  
	  	 }
	  	 /**
	  	  * [cerrar funcion de cierre de coneccion]
	  	  * @param  string $db [ejecuta funcion de cerrar conexion]
	  	  * @return [type]     [No retorna]
	  	  */
	  	 function cerrar($db=""){
	  	 		$db->close();
	  	 }
	  }
?>