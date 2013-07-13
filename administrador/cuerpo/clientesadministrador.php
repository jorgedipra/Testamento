<div id="cliente">
Cliente
</div>
<?php 
    while($res=$adminclientes->fetch_assoc()){
    	?>
    		Nombre <label><?php echo $res['UsrNombre']; ?></label>
            <br>
            Correo <label><?php echo $res['UsrCorreo']; ?></label>
            <br>
            <br>
    	<?php
     }
   
?>
Numero de Clientes
<?php 
echo   $res1;
?>