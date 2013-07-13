<?php 
     include_once('../conexion/php/operacionesSql.php');
    $objopera  =  new operaciones();
    $verclientes="SELECT * FROM testamento.usuario WHERE TpIdUsrd='1'";
    $numeroclientes="SELECT count(*) as num FROM testamento.usuario WHERE TpIdUsrd='1'";
    $adminclientes=$objopera->buscar($verclientes);
    $adminnumero=$objopera->buscar($numeroclientes);
         $res1=   $adminnumero->fetch_object()->num; 
	include_once('cuerpo/clientesadministrador.php');
?>