<?php
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
session_start();
?>
<link rel="shortcut icon" href="../img/h1.ico" />
<link rel="stylesheet" href="../css/style.css"><!--se llama el stilo--> 
<link rel="stylesheet" href="../css/stylebenef.css"><!--se llama el stilo--> 
<script src="../script/jquery-1.9.1.js"></script>
<script src="../script/jquery.pajinate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
        $('#paging_container7').pajinate({
          num_page_links_to_display : 3,
          items_per_page : 3  
        });
      });
      </script>
 <script type="text/javascript">
  function borrar(id){
    alert(document.getElementById(id).value);
  if (confirm('¿Estas seguro que desea borrar este Beneficiario?')){ 

      location.href = "beneficiados.php?id="+document.getElementById(id).value;
    } 
}    
</script>
<title>MIS BENEFICIADOS</title>
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
  
  if(isset($_GET['id'])){
        $eliminar="DELETE FROM testamento.beneficiarioarchivo WHERE BenId='".$_GET['id']."'";
        $objopera->insertar($eliminar);
        $eliminarben="DELETE FROM testamento.beneficiario WHERE BenId='".$_GET['id']."'";
        $objopera->insertar($eliminarben);

  }
include_once('cuerpo/beneficiados.php');
?>  
</body>
</html> 