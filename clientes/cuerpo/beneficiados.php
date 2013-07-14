<article id="cont">
<h1>MIS BENEFICIADOS</h1>


<section id="agrebene">
   <h2>Agregar Beneficiados</h2> 
    <br>
    <br>
    <form action="beneficiados.php" method="post">
    <label>Nombre:</label>
    <input name="nobene" type="text">
    <br>
    <br>
    <label>Cedula:</label> 
    <input name="cocedula" type="text">
    <br>
    <br>
    <label>Correo:</label>
    <input name="cobene" type="email" required="email">
    <br>
    <br>
    <label>Telefono:</label>
    <input name="telefono" type="number" required="number">
    <br>
    <br>
    <label>Bienes:</label>
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
        <br><br><br>
         <input type="submit" class="button" value="insertar"> 
    </form>
</section>
<!--   -->

<section id="verbene">
  <section id="contt">
   <h2> Ver Beneficiados</h2>
    <br>
    <br>
    <div id="paging_container7">
      <ul class="content">
     <?php 
            $verbeneficiado="SELECT BenNombre,AchNombre FROM (testamento.beneficiario INNER JOIN testamento.beneficiarioarchivo)INNER JOIN testamento.archivo 
WHERE beneficiario.BenId = beneficiarioarchivo.BenId and beneficiarioarchivo.AchId = archivo.AchId ";
$verarchi=$objopera->buscar($verbeneficiado);
     while($res2=$verarchi->fetch_assoc())
    {
        

        ?><li>
    <label>Nombre Beneficido</label>
    <label><?php echo $res2['BenNombre'];?></label>
    <br><br>
     <label>Bienen</label>
     <label><?php echo $res2['AchNombre'];?></label>
      
    <br><br>
    <a href="#" class="button" >Eliminar</a>
      </li>
    <?php
        }

    ?>
      </ul>   
      <div class="page_navigation"></div>
      </div> 
   </section>
</section>
</article>

         
      