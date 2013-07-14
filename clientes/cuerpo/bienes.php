<article id="cont">
<h1>MIS BIENES</h1>

<section id="agrebene">
<section id="agrebien">
	<h2>Agregar Bien</h2> 
  <br>
  <br>
  <br>
  <br>
	 <form action="bienes.php" method="post" enctype="multipart/form-data">
      <label>Nombre</label>
      <input name="nobien" type="text">
      <br>
      <br>
      <label>Archivo</label>
      <input name="urlbien" type="file">
      <br>
      <br>
      <label>Descripcion</label>
      <textarea name="descricion">
      </textarea> 
      <br>  
      <br>  
      <br>	
      <input type="submit"  class="button" value="Agregar">
	 </form>
</section>
</section>

<article id="verbene">
<section id="verBienes">
  <section id="contt">
	<h2>Ver Bienes</h2>
	 <br>
    <br>
    <div id="paging_container7">
      <ul class="content">	
	 <?php
	 $i=0;
         while($res=$archivos->fetch_assoc())
    {
	  ?>
    <li>
	<label>Nombre:</label>
	<label><?php echo $res['AchNombre'];?></label>
	<br>
	<label>Descripcion:</label>
	<textarea>
      <?php  echo $res['AchDescripcion'];?>
	</textarea>
	<br>
	<input  type="hidden" value="">
	<a id="elimarchiva<?php echo $i;?>"  class="button" href="#">Eliminar</a>
   </li>
   <?php 
  $i++;
    }
    ?>
  </ul>   
  <div class="page_navigation"></div>
</div> 
</section>
</article>