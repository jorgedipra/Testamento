<a href="#" id="BtnRegis">REGISTRARSE</a>
<a href="#" id="BtnIngres" >INGRESAR</a>



<div id="tabs">
  <ul>
    <li><a href="#tabs-1">INICIO</a></li>
    <li><a href="#tabs-2">VISION</a></li>
    <li><a href="#tabs-3">MISION</a></li>
    <li><a href="#tabs-4">SERVICIO</a></li>
    <li><a href="#tabs-5">AYUDA</a></li>

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
  <div id="tabs-5">
    <p>
        5
    </p>
  </div>
</div>

<section id="logeo">
    <div id="logeoCerar" class="logeoCerar">X</div>
    <form action="index.php" method="post">
        <label>Nick: </label>
        <input name="nick" type="text" required>
        <br>
        <label>Clave:</label>
        <input name="clave" type="password" required>
        <br>
        <center>
        <input id="Btnsub" name="enviar" type="submit" value="enviar">
        </center>
    </form>
</section>

<article id="pregunta">
    <div id="preguntaCerar" class="logeoCerar">X</div>
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
    