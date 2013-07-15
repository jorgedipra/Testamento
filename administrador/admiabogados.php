<?php
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
session_start();
?>
<link rel="shortcut icon" href="../img/h1.ico" />
<link rel="stylesheet" href="../css/style.css"><!--se llama el stilo--> 
<link rel="stylesheet" href="../css/stylebenef.css"><!--se llama el stilo--> 
 <script type="text/javascript">
  function borrar(id){
    alert(document.getElementById(id).value);
  if (confirm('¿Estas seguro que desea borrar este Beneficiario?')){ 

      location.href = "admiabogados.php?id="+document.getElementById(id).value;
    } 
}    
</script>
<title>Testamento</title>
</head>
<body>
<?php 
 include_once('../conexion/php/operacionesSql.php');
  $objopera  =  new operaciones();
if(isset($_POST['targeta'])){
   $verificar="SELECT * FROM testamento.abogados WHERE AbgTargeta='".$_POST['targeta']."'";
    $confirabg = $objopera ->buscar($verificar);

  if($confirabg){


  if($_FILES['fotoabg']['tmp_name']!=""){
    $prefijo = substr(md5(uniqid(rand())),0,6);
    $destino =  "../img/fotosabogados/".$prefijo."_".$_FILES['fotoabg']['name'];
    $destinoF = '/www/Testamento (GitHub for Windows)/img/fotosabogados/'.$prefijo."_".$_FILES['fotoabg']['name'];
    copy($_FILES['fotoabg']['tmp_name'],$destino);
     $inabogados="INSERT INTO Abogados(AbgNombre,AbgTelefono,AbgCorreo,AbgTargeta,AbgFoto,AbgPerfil)
     VALUES('".$_POST['nomabo']."','".$_POST['telabo']."','".$_POST['correoabg']."','".$_POST['targeta']."','".$destinoF."','".$_POST['perfilabg']."')";
 
     $objopera->insertar($inabogados);
      echo " <script type='text/javascript'> alert('YA Insertado correctamente');</script>";
                              }  
  else{
  	$inseaboaux="INSERT INTO Abogados(AbgNombre,AbgTelefono,AbgCorreo,AbgTargeta,AbgPerfil)
   VALUES('".$_POST['nomabo']."','".$_POST['telabo']."','".$_POST['correoabg']."','".$_POST['targeta']."','".$_POST['perfilabg']."')";
   echo $inseaboux;
    $objoper->insertar($inseaboaux);
      echo " <script type='text/javascript'> alert('YA Insertado correctamente');</script>";
  }

} 
else
{
    echo " <script type='text/javascript'> alert('YA Existe');</script>";
}

}
$eliminarcliente="DELETE FROM abogados WHERE AbgId=''";
$buscarabg="SELECT * FROM testamento.abogados";  	
$resuabg=$objopera->buscar($buscarabg);
    if(isset($_GET['id'])){
        $eliminarben="DELETE FROM testamento.abogados WHERE AbgId='".$_GET['id']."'";
        $objopera->insertar($eliminarben);

  }
include_once('cuerpo/admiabogados.php');

?>
</body>
</html>