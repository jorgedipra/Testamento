<?php 
      include_once('../conexion/php/operacionesSql.php');
      $objopera  =  new operaciones();
  
  if(isset($_POST['cuenta'])){
  	$cuenta="INSERT INTO cuenta(CntNombre,CntCorreo,CntEntregado,CntClave)VALUES('".$_POST['cuenta']."','".$_POST['ctncorreo']."','".$_POST['encargado']."','".$_POST['ctnClave']."')";
  	 $objopera->insertar($cuenta);
  }
 $buscar="SELECT * FROM testamento.cuenta";
 $resultado=$objopera->buscar($buscar);
	include_once('cuerpo/completartestamento.php');
	
?>