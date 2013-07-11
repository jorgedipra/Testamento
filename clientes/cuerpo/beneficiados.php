MIS BENEFICIADOS

<section id="agrebene">
    Agregar Beneficiados
    <br>
    <br>
    <form action="beneficiados.php" method="post">

    <label>Nombre</label>
    <input name="nobene" type="text">
    <br>
    <label>Cedula</label>
    <input name="cocedula" type="text">
    <label>Correo</label>
    <input name="cobene" type="email" required="email">
    <br>
    <label>Telefono</label>
    <input name="telefono" type="number" required="number">
    <br>
    <label>Bienes</label>
    <section id="bienes" name="bienes">
          
  		<option >N/A</option>
        <?php 
           while($res=$verarchi->fetch_assoc())
           {
        ?>
  		<option value="<?php echo $res['AchId'];?>"><?php echo $res['AchNombre'];?></option>
        <?php
          }
        ?>
    </section>  
    </form>
</section>
<section id="verbene">
    Ver Beneficiados
    <br>
    <br>
     <?php 
           while($res=$ver2->fetch_assoc())
           {
        ?>
    <label>Nombre Beneficido</label>
    <label><?php echo $res['BenNombre'];?></label>
     <label>Bienen</label>
     <label><?php echo $res['AchNombre'];?> </label>
      
    <br>
    <input type="hidden" value="Eliminar">
    <?php
        }
    ?>
</section>

