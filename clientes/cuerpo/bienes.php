MIS BIENES

<section id="agrebien">
	 Agregar Bien
	 <form action="bienes.php" method="post" enctype="multipart/form-data">
      <label>Nombre</label>
      <input name="nobien" type="text">
      <br>
      <label>Archivo</label>
      <input name="urlbien" type="file">
      <br>
      <label>Descripcion</label>
      <textarea name="descricion">

      </textarea> 
      <br>	
      <input type="submit" value="Agregar">
	 </form>
</section>

<section id="verBienes">
	Ver Bienes
	 <br>	
	 <?php
	 $i=0;
         while($res=$archivos->fetch_assoc())
    {
	  ?>
	<label>Nombre:</label>
	<label><?php echo $res['AchNombre'];?></label>
	<br>
	<label>Descripcion:</label>
	<textarea>
      <?php  echo $res['AchDescripcion'];?>
	</textarea>
	<br>
	<input  type="hidden" value="">
	<a id="elimarchiva<?php echo $i;?>" href="#">Eliminar</a>
   <?php 
  $i++;
    }
    ?>
</section>