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
  if (confirm('¿Estas seguro que desea borrar este Bien?')){ 

      location.href = "bienes.php?id="+document.getElementById(id).value;
    } 
}    
</script>

<title>MIS BIENES</title>
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
  	$inseaboaux="INSERT INTO archivo(AchNombre,AchDescripcion)
   VALUES('".$_POST['nobien']."','".$_POST['descricion']."')";
    $objoper->insertar($inseaboaux);
     echo " <script type='text/javascript'> alert('YA Insertado correctamente');</script>";
     }

  }

  if(isset($_GET['id'])){
        $eliminar="DELETE FROM testamento.beneficiarioarchivo WHERE AchId='".$_GET['id']."'";
        $objopera->insertar($eliminar);
        $eliminarben="DELETE FROM testamento.archivo WHERE AchId='".$_GET['id']."'";
        $objopera->insertar($eliminarben);

  }
  $archivover="SELECT * FROM archivo";
   $archivos=$objopera->buscar($archivover);
  include_once('cuerpo/bienes.php');
?>
</body>
</html> 