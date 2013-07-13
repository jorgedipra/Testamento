<?php 
  include_once('../conexion/php/operacionesSql.php');
  $objopera  =  new operaciones();



  $verarchivo="SELECT * FROM testamento.archivo";
 $vienes=$objopera->buscar($verarchivo);
  if(isset($_POST['cocedula'])){
  	  $verifiacar="SELECT * FROM testamento.beneficiario WHERE BenCedula='".$_POST['cocedula']."'";
  	  $ver=$objopera->buscar($verifiacar);
     if(!$ver){
         $insrbene="INSERT INTO beneficiario(BenCedula,BenCorreo,BenNombre,BenTelefono)VALUES('".$_POST['cocedula']."','".$_POST['cobene']."','".$_POST['nobene']."','".$_POST['telefono']."')";
         $objopera->insertar($insrbene);
         $maxid="SELECT MAX(BenId) as maxid1 FROM testamento.beneficiario";
         $max=$objopera->buscar($maxid);
         $res1=  $max->fetch_object()->maxid1; 
         $conbenarchivo="INSERT INTO beneficiarioarchivo(BenId,AchId)VALUES('". $res1."','".$_POST['bienes']."')";
         $objopera->insertar($conbenarchivo);
         echo " <script type='text/javascript'> alert('YA Insertado correctamente');</script>";
     }
      else{
        echo " <script type='text/javascript'> alert('YA Existe');</script>";
     }

  }
 




include_once('cuerpo/beneficiados.php') 

?>
 
  
   