<?php
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
session_start();
?>
<link rel="stylesheet" href="../css/style.css">

<?php 

 include_once('../conexion/php/operacionesSql.php');
   $objopera  =  new operaciones();
   $buscarabg="SELECT * FROM testamento.abogados";  	
   $resuabg=$objopera->buscar($buscarabg);
include_once('cuerpo/clienteAbogados.php');
?>