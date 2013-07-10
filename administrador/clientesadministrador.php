<?php 
     include_once('../conexion/php/operacionesSql.php');
    $objopera  =  new operaciones();
    $verclientes="SELECT * FROM testamento.usuario WHERE TpIdUsrd='2'";
    $numeroclientes="SELECT count(*) FROM testamento.usuario WHERE TpIdUsrd='2'";
    $adminclientes=$objopera->buscar($verclientes);
    $adminnumero=$objopera->buscar($numeroclientes);
	include_once('cuerpo/clientesadministrador.php');
?>