<?php 
  include_once('../conexion/php/operacionesSql.php');
  $objopera  =  new operaciones();
  $verbene="SELECT * FROM testamento.beneficiario";
  if(isset($_POST['cocedula'])){
  	  $verifiacar="SELECT * FROM testamento.beneficiario WHERE BenCedula='".$_POST['cocedula']."'";
  	  $ver=$objopera->buscar($verifiacar);
     if($ver){
         $insrbene="INSERT INTO beneficiario(BenCedula,BenCorreo,BenNombre,BenTelefono)VALUES('".$_POST['cocedula']."','".$_POST['cobene']."','".$_POST['nobene']."','".$_POST['telefono']."')";
         $objopera->insertar($insrbene);
         $maxid="SELECT MAX(BenId) FROM testamento.beneficiario";
        $max=$objopera->buscar($maxid);
         $res1=  $max->fetch_object()->maxid;
         $conbenarchivo="INSERT INTO beneficiarioarchivo(BenId,AchId)VALUES('".$_POST['bienes']."','".$res1."')";
         $objopera->insertar($conbenarchivo);
     }
  }
$verarchivos="SELECT * FROM testamento.archivo";
$verarchi=$objopera->buscar($verifiacar);
$ver2=$objopera->buscar($verbene);
include_once('cuerpo/beneficiados.php') 

?>
  
  
   