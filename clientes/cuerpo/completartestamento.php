<a href="clientesprincipal.php">Salir</a>
COMPLETAR TESTAMENTO

<section id="agrecuenta">
   Agregar Cuenta
   <form action="completartertamento.php" method="post">

   <br>
   <label>Cuenta En</label>
   <select name="cuenta">
      <option value="facebook">
        Facebook
      </option>
      <option value="twitter">
        Twitter
      </option>
   </select>
   <br>
   Correo: <input type="email" name="ctncorreo">
   <br>
   Clave: <input type="password" name="ctnClave">
   <br>
   Encargado: <select name="encargado">
   <?php 

      $beneficiario="SELECT * FROM testamento.beneficiario"; 
      $resul=$objopera->buscar($beneficiario);
    while($res=$resul->fetch_assoc())
           {
         ?>
     <option value="<?php echo $res['BenNombre'];?>" >
        <?php echo $res['BenNombre'];   ?>
     </option> 
    <?php

            } 

  ?> 
    </select>
    <br>
    <input type="submit" value="Ingresar" class="button">
    </form>
</section>


<section id="cuentas">
      Cuentas Asosiadoas
    <?php 
         while($res= $resultado->fetch_assoc())
           {
     ?>
     <br>
     <label>Cuenta</label>
     <label><?php echo $res['CntNombre'];?></label>
     <br>
     <label>Encargado</label>
     <label><?php echo $res['CntEntregado'];?></label>
     <br>
     <label>clave</label>
       <label><?php echo $res['CntClave'];?></label>
       <br>
        <input type="hidden" id="idcuenta" value="<?php echo $res['CntId'];?>">
       <a class="botton" href="#" onClick="borrar(<?php echo $res['CntId'];?>)" >Eliminar</a>
       <?php

       }

        ?>
</section>