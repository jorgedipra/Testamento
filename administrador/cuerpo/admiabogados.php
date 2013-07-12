ABOGADOS

<article>
   <section id="añadirabogado">
       <form action="admiabogados.php" method="post" enctype="multipart/form-data">
       		<label>Nombre</label>
       		<input name="nomabo" type="text">
       		<br>
       		<label>Telefono</label>
       		<input name="telabo" type="number">
            <br>
            <label>Correo</label>
            <input name="correoabg" type="email">
            <br>
            <label>N Targeta</label>
            <input name="targeta" type="text">
            <br>
            <label>Fotos</label>
            <input name="fotoabg" type="file">
            <br>
            <label>Perfil</label>
            <textarea name="perfilabg"></textarea>
            <input id="btninsert" type="submit" value="Añadir">
       </form>
   </section>
   <section id="verabogados">
   		Ver Abogados
   		<?php 
         while($res=$resuabg->fetch_assoc())
           {
           	?>
           			 <img src="<?php echo $res['AbgFoto']; ?>">
   		             <br>
   		             <label>Nombre</label>
   		             <label><?php echo  $res['AbgNombre']; ?></label>
        			 <label>Perfil</label>
                     <textarea><?php echo  $res['AbgPerfil']; ?></textarea>
                     <input type="hidden" id="eliminarabg" value="<?php echo  $res['AbgId']; ?>">
                     <div id="eliminar">
        	              <a href="#" onclick="<script> </script>">Eliminar</a>
                     </div>

           	<?php
           }
   		?>
   	

   </section>
</article>