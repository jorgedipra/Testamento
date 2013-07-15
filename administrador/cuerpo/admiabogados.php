
<a href="administradorprincipal.php">Salir</a>
<article id="cont">
<h1>ABOGADOS</h1>

<section id="agrebene">
<section id="agrebien">
  <h2>Agregar Abogados</h2> 
  <br>
  <br>
  <br>
  <br>
  <section id="añadirabogado">
       <form action="admiabogados.php" method="post" enctype="multipart/form-data">
          <label>Nombre</label>
          <input name="nomabo" type="text">
          <br>
          <br>
          <label>Telefono</label>
          <input name="telabo" type="number">
          <br>
            <br>
            <label>Correo</label>
            <input name="correoabg" type="email">
          <br>
            <br>
            <label>N Targeta</label>
            <input name="targeta" type="text">
          <br>
            <br>
            <label>Fotos</label>
            <input name="fotoabg" type="file">
          <br>
            <br>
            <label>Perfil</label>
            <textarea name="perfilabg"></textarea>
          <br>
            <br>
            <input id="btninsert"   class="button" type="submit" value="Añadir">
       </form>
   </section>

</section>
</section>

<article id="verbene">
<section id="verBienes">
  <section id="contt">
  <h2>Ver Abgados</h2>
  
   <div id="paging_container7">
    <section id="verabogados">

      <?php 
         while($res=$resuabg->fetch_assoc())
           {
            ?>
                 <img src="<?php echo $res['AbgFoto']; ?>"  width="150px" >
                   <br>
                   <br>
                   <label>Nombre:</label>                    
                   <label><?php echo  $res['AbgNombre']; ?></label>
                   <br>
                   <br>
               <label>Perfil</label>
                   <br>
                   <br>

                     <textarea><?php echo  $res['AbgPerfil']; ?></textarea>
                     <input type="hidden" id="<?php echo  $res['AbgId']; ?>" value="<?php echo  $res['AbgId']; ?>">
                       <br>
                     <br>
                      <br>
                     <div id="eliminar" style="width:100%; height: 30px; padding-top:10px; ">
                        <a href="#" class="button"  onclick="borrar(<?php echo  $res['AbgId']; ?>)">Eliminar</a>
                     </div>

            <?php
           }
      ?>

   </section>
</section>
</article>