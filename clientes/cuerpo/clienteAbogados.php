<a href="clientesprincipal.php">Salir</a>
<center>
<article id="verbene">
<section id="verBienes">
  <section id="contt">
  <h2>ABOGADOS</h2>
  
  
<?php 
  while($res=$resuabg->fetch_assoc())
     {

?>
     	<br>
	<img src="<?php echo $res['AbgFoto']; ?>"  width="150px">
		<br>
	<label>Nombre</label>

	<label> <?php echo $res['AbgNombre'];?></label>
	<br>
	<label>Tareta Profecional</label>
	<label><?php echo $res['AbgTargeta'];?></label>
		<br>
	<label>Telefono</label>
	<label><?php echo $res['AbgTelefono'];?></label>
		<br>
	<label>Perfil</label>
	<textarea><?php echo $res['AbgPerfil'];?></textarea>
		<br>
<?php
}
?>
</select>
</select>
</article>
</center>