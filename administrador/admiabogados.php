<?php 
 include_once('../conexion/php/operacionesSql.php');
  $objopera  =  new operaciones();
if(isset($_POST['targeta'])){
   $verificar="SELECT * FROM testamento.abogados WHERE AbgTargeta='".$_POST['targeta']."'";
  $confirabg=$abjopera->buscar($verificar);

  if($confirabg){


  if($_FILES['foto']['tmp_name']!=""){
    $prefijo = substr(md5(uniqid(rand())),0,6);
    $destino =  "../img/fotosabogados/".$prefijo."_".$_FILES['fotoabg']['name'];
    $destinoF = '/img/fotosabogados/'.$prefijo."_".$_FILES['fotoabg']['name'];
    copy($_FILES['foto']['tmp_name'],$destino);
     $inabogados="INSERT INTO Abogados(AbgNombre,AbgTelefono,AbgCorreo,AbTargeta,AbgFoto,AbgPerfil)
     VALUES('".$_POST['nomabo']."','".$_POST['telabo']."','".$_POST['correoabg']."','".$_POST['targeta']."','".$destinoF."','".$_POST['perfilabg']."')";
     $objoper->insertar($inabogados);
    
                              }  
  else{
  	$inseaboaux="INSERT INTO Abogados(AbgNombre,AbgTelefono,AbgCorreo,AbTargeta,AbgPerfil)
   VALUES('".$_POST['nomabo']."','".$_POST['telabo']."','".$_POST['correoabg']."','".$_POST['targeta']."','".$_POST['perfilabg']."')";
    $objoper->insertar($inseaboaux);
  }

} 

}

$buscarabg="SELECT * FROM testamento.abogados";  	
$resuabg=$objopera->buscar($buscarabg);
  
include_once('cuerpo/admiabogados.php');

?>