<?php 

 include_once('../conexion/php/operacionesSql.php');
   $objopera  =  new operaciones();
   $buscarabg="SELECT * FROM testamento.abogados";  	
   $resuabg=$objopera->buscar($buscarabg);
include_once('cuerpo/clienteAbogados.php');
?>