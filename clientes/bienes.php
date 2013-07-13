<?php 
 include_once('../conexion/php/operacionesSql.php');
   $objopera  =  new operaciones();
  if(isset($_POST['nobien'])){

  	if($_FILES['urlbien']['tmp_name']!=""){
    $prefijo = substr(md5(uniqid(rand())),0,6);
    $destino =  "../img/archivos/".$prefijo."_".$_FILES['urlbien']['name'];
    $destinoF = '/img/archivos/'.$prefijo."_".$_FILES['urlbien']['name'];
    copy($_FILES['urlbien']['tmp_name'],$destino);
    
     $inserbien="INSERT INTO archivo(AchNombre,AchDescripcion,AchUrl)VALUES('".$_POST['nobien']."','".$_POST['descricion']."','".$destinoF."')";
     $objopera->insertar($inserbien);
     echo " <script type='text/javascript'> alert('YA Insertado correctamente');</script>";
                              }  
          else{
  	$inseaboaux="INSERT INTO Abogados(AchNombre,AchDescripcion)
   VALUES('".$_POST['nobien']."','".$_POST['descricion']."')";
    $objoper->insertar($inseaboaux);
     echo " <script type='text/javascript'> alert('YA Insertado correctamente');</script>";
     }

  }
  $archivover="SELECT * FROM archivo";
   $archivos=$objopera->buscar($archivover);
  include_once('cuerpo/bienes.php');
?>