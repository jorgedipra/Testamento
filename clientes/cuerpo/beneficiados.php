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
       <br>
    <label>Correo</label>
    <input name="cobene" type="email" required="email">
    <br>
    <label>Telefono</label>
    <input name="telefono" type="number" required="number">
    <br>
    <label>Bienes</label>
          <select id="bienes" name="bienes">
  		<option >N/A</option>
        <?php 
           while($res=$vienes->fetch_assoc())
           {
        ?>
  		<option value="<?php echo $res['AchId'];?>"><?php echo $res['AchNombre'];?></option>
        <?php
          }
        ?>
        </select>
        <br>
         <input type="submit" value="insertar"> 
    </form>
</section>


<section id="verbene">
    Ver Beneficiados
    <br>
    <br>
     <?php 
            $verbeneficiado="SELECT BenNombre,AchNombre FROM (testamento.beneficiario INNER JOIN testamento.beneficiarioarchivo)INNER JOIN testamento.archivo 
WHERE beneficiario.BenId = beneficiarioarchivo.BenId and beneficiarioarchivo.AchId = archivo.AchId ";
$verarchi=$objopera->buscar($verbeneficiado);
     while($res2=$verarchi->fetch_assoc())
    {
            
        ?>
    <label>Nombre Beneficido</label>
    <label><?php echo $res2['BenNombre'];?></label>
    <br>
     <label>Bienen</label>
     <label><?php echo $res2['AchNombre'];?></label>
      
    <br>
    <a href="#">Eliminar</a>
     <br>
    <?php
        }
    ?>
   
</section>


