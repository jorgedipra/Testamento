<?php
 include_once ('recursos/info.php');//se llama la informacion de la pagina
session_start();
?>
<link rel="stylesheet" href="css/style.css"><!--se llama el stilo-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="script/script.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
<title> </title>
</head>
<body>
<?php
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
</body>
</html>