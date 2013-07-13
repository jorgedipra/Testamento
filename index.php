<?php
 include_once ('recursos/info.php');//se llama la informacion de la pagina
session_start();
?>
<link rel="shortcut icon" href="img/h1.ico" />
<link rel="stylesheet" href="css/style.css"><!--se llama el stilo-->
<link rel="stylesheet" href="css/jquery-ui.css" />
  <script src="script/jquery-1.9.1.js"></script>
  <script src="script/jquery-ui.js"></script>
  <script src="script/script.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
<title>Testamento</title>
</head>
<body>
<?php
include_once('conexion/php/operacionesSql.php');
  $objopera  =  new operaciones();
  if(isset($_POST['nick'])){
       $logeo="SELECT * FROM testamento.usuario WHERE UsrNick='".$_POST['nick']."' and UsrClave='".$_POST['clave']."'";
       $notifi=$objopera->buscar($logeo);
       while($res=$notifi->fetch_assoc()){
          $_SESSION['Nombre']=$res['UsrNombre'];
          if($res['TpIdUsrd']==1){
                echo "hola";
                header('location: clientes/clientesprincipal.php');
            }
            elseif($res['TpIdUsrd']==2)
            { echo "hola";
            	header('location: administrador/administradorprincipal.php');

            }
            else  {
               echo " <script type='text/javascript'> alert('Usuario No registrado');</script>";
                              
                              }  
            
        }     
  }
   if(isset($_POST['asunto'])){
	  $consul="INSERT INTO Pregunta(PreAsunto,PreDescipcion,PreCorreo)VALUES('".$_POST['asunto']."','".$_POST['pregunta']."','".$_POST['correo']."')";
	  $objopera->insertar($consul);
	}
  include_once('cuerpo/index.php');
?>
</body>
</html>