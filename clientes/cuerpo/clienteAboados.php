ABOGADOS
<?php 
  while($res=$resuabg->fetch_assoc())
     {

?>

	<img src="<?php echo $res['AbgFoto']; ?>">
	<label>Nombre</label>
	<label> <?php echo $res['AbgNombre'];?></label>
	<br>
	<label>Tareta Profecional</label>
	<label><?php echo $res['AbgTargeta'];?></label>
	<label>Telefono</label>
	<label><?php echo $res['AbgTelefono'];?></label>
	<label>Perfil</label>
	<textarea><?php echo $res['AbgPerfil'];?></textarea>
<?php
}
?>