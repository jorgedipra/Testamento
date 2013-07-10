<?php 
  include_once('../conexion/php/operacionesSql.php');
 $objopera  =  new operaciones();
    if(isset($_POST['correo'])){
    	$resgis="INSERT INTO usuario(UsrNombre,UsrCorreo,UsrClave,UsrEdad,UsrNick,TpIdUsrd,UsrCorreo2)
                VALUE('".$_POST['nombre']."','".$_POST['correo']."','".$_POST['clave']."','".$_POST['edad']."','".$_POST['nick']."','1','".$_POST['correo2']."')";
                $objopera->insertar($resgis);
    }
	include_once('cuerpo/registrarse.php');

?>