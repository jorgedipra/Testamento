<a href="#">REGISTRARSE</a>
<a href="#">INGRESAR</a>

<div id="menu">
	<ul>
		<li>INICIO</li>
		<li>VISION</li>
		<li>MISION</li>
		<li>SERVICIO</li>
	</ul>
</div>
<section id="logeo">
	<form action="index.php" method="post">
		<label>Nick</label>
		<input name="nick" type="text" required>
		<br>
		<label>Clave</label>
		<input name="clave" type="password" required>
	</form>
</section>
<section>
    <article id="pregunta">
      <form action="index.php" method="post">
    	<label>Asunto</label>
    	<input type="text" name="asunto">
    	<br>
    	<label>Pregunta</label>
    	<textarea name="pregunta"></textarea>
    	<br>
    	<label>Correo</label>
    	<input name="correo" type="email" required>
    	<input type="submit" value="Preguntar">
      </form>	
    </article>
    <article id="video">
    	<video controls>

    	</video>
    </article>
</section>