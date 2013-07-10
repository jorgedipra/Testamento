<?php 
include_once('conexionphp.php');

  class operaciones extends conexionphp 
   {    var $conexion=null;
        var $datos = null;
       /**
        * [__construct funsion cotructora]
        */
      function __construct(){
       $this->conectar = new conexionphp() ;
           $this->conexion = $this->conectar->conectar();
      }
      /**
       * [insertar funcion que llama el insert a la BD y ejecuta el contenido de sql]
       * @param  [type] $sql [cadena que contiene la sentencia sql]
       * @return [type]      [no retorna]
       */
      function insertar($sql){
        if($this->conexion->query($sql))
         {
              //echo "<script> alert('operacion exitosa ');</script>";
              
          }else{
            
            echo "<script> alert('Error ');</script>";
          }
      }
      /**
       * [buscar funcion que llama el select a la BD y ejecuta el contenido de sql]
       * @param  [type] $sql [description]
       * @return [type] dato [la cadena resultante]
       */
     function buscar($sql){
         if($this->conexion->query($sql))
          {
              $this->datos = $this->conexion->query($sql);
              return $this->datos;
          }
          else{           
            echo "<script> alert('Error ');</script>";
          }
         }
     
         /**
          * [__destruct funcion destructora]
          */
      public function __destruct()
         {
               $this->conectar->cerrar($this->conexion);
         }

   }
?>


