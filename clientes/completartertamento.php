<?php
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
session_start();
?>
<link rel="shortcut icon" href="../img/h1.ico" />
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/stycompletestameto.css">

<script type="text/javascript">
  function borrar(id){
    alert(document.getElementById(id).value);
  if (confirm('¿Estas seguro que desea borrar este Bien?')){ 

      location.href = "completartestamento.php?id="+document.getElementById(id).value;
    } 
}    
</script>
<?php 
      include_once('../conexion/php/operacionesSql.php');
      $objopera  =  new operaciones();
  
  if(isset($_POST['cuenta'])){
  	$cuenta="INSERT INTO cuenta(CntNombre,CntCorreo,CntEntregado,CntClave)VALUES('".$_POST['cuenta']."','".$_POST['ctncorreo']."','".$_POST['encargado']."','".$_POST['ctnClave']."')";
  	  
  	$objopera->insertar($cuenta);
     $maxid="SELECT MAX(CntId) as maxid1 FROM testamento.cuenta";
      $max=$objopera->buscar($maxid);
      $res1=  $max->fetch_object()->maxid1; 
      $inser="INSERT INTO cuentausuario(CntId,UsrId)VALUES('".$res1."','".$_SESSION['idusuario']."')";
      $objopera->insertar($inser);

  }  
 $buscar="SELECT * FROM testamento.cuenta";
 $resultado=$objopera->buscar($buscar);

  if(isset($_GET['id'])){
        $eliminar="DELETE FROM testamento.cuentausuario WHERE CntId='".$_GET['id']."'";
        $objopera->insertar($eliminar);
        $eliminarben="DELETE FROM testamento.cuenta WHERE CntId='".$_GET['id']."'";
        $objopera->insertar($eliminarben);

  }
	include_once('cuerpo/completartestamento.php');
	
?>