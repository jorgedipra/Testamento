<?php 
session_start();
include_once('conexion/php/operacionesSql.php');
  $objopera  =  new operaciones();
  if(isset($_POST['nick'])){
       $logeo="SELECT * FROM testamento.usuario";
       $notifi=$objopera->buscar($logeo);
       while($res=$notifi->fetch_assoc()){
          $_SESSION['Nombre']=$res['UsrNombre'];
          if($res['TpIdUsrd']==1){

            }
            else{
            	header('location: administrador/administradorprincipal.php');
            }
        }
     
  }
   if(isset($_POST['asunto'])){
	  $consul="INSERT INTO Pregunta(PreAsunto,PreDescipcion,PreCorreo)VALUES('".$_POST['asunto']."','".$_POST['pregunta']."','".$_POST['correo']."')";
	  $objopera->insertar($consul);
	}
include_once('cuerpo/index.php');

?>