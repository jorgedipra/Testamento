<a href="#">REGISTRARSE</a>
<a href="#">INGRESAR</a>



<div id="tabs">
  <ul>
    <li><a href="#tabs-1">INICIO</a></li>
    <li><a href="#tabs-2">VISION</a></li>
    <li><a href="#tabs-3">MISION</a></li>
    <li><a href="#tabs-4">SERVICIO</a></li>
  </ul>
  <div id="tabs-1">
    <p>
        1
    </p>
  </div>
  <div id="tabs-2">
    <p>
        2
    </p>
  </div>
  <div id="tabs-3">
    <p>
        3
    </p>
  </div>
  <div id="tabs-4">
    <p>
        4
    </p>
  </div>
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