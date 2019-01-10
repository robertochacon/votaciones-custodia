<?php
include '../modells/libs/conexion.php';
session_start();

if (isset($_COOKIE['usuario'])) {
	@$_SESSION['navegador'] = $_COOKIE['usuario'];
}else{
	header("Location:../index.php");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>Categoria</title>
	<script src="../js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="icon" type="image/png" href="../img/logo.png">
</head>
<body class="fondo">
<header>
	<div class="header">

	<div class="aside_header"></div>

	<div class="centro">
		<div class="logo">
			<img src="../img/logo.png" width="100">
		</div>
			<div class="centro_centro">
			<div class="paquete">
				<div>
					<img src="../img/logo.png" class="logo_responsive" width="100"><br>
				</div>
				<div class="cajas">
					
					<center><h3>Premios Custodias 2018</h3></center>
				</div>		
				<div class="cajas">
					<b><span id="contador"></span></b>
				</div>
			</div>	
			</div>
		<div class="redes">
			<!--Redes sociales-->
		</div>
	</div>
	<div class="aside_header"></div>
	</div>

	<label for="btn_menu" class="btn_menu"><img src="img/menu.png"></label>
	<input type="checkbox" id="btn_menu">
	<div class="menu">
		<ul>
			<li><a href="../index.php">Inicio</a></li>
			<li><a href="../index.php">Novedades</a></li>
			<li><a href="../index.php">Categoria</a></li>
			<li><a href="../index.php">Galeria</a></li>
			<li><a href="../index.php">Comite Organizador</a></li>
			<li><a href="../index.php">Contacto</a></li>
		</ul>
	</div>

</header>
<script type="text/javascript">
	window.onload=function(){
	var antes = document.getElementById('carga');
	antes.style.display='none';}
</script>
<div id="carga"></div>
<center>
<div class="contenido">
	<div class="contenedor">

<?php
//sesion de usuario
$codigo_usuario = @$_SESSION['navegador'];
//conexion
$con = new conexion();
//obteniendo la categoria por get
$categoria = mysqli_real_escape_string($con, $_GET['categoria']);

$votacion = $con->query("SELECT * FROM votacion WHERE categoria ='".$categoria."'");
echo "<center><br><br></center>";

?>
<div class="contenedor">
	<div class="votacion">
		<!--pasando el valor a la categria-->
		<input type="hidden" name="categoria" id="categoria" value="<?php echo $categoria;?>">
<?php

while ($ver = mysqli_fetch_array($votacion)) { 

	$id_voto = $ver['id'];
	$sql_megustas = $con->query("SELECT * FROM megustas WHERE id_voto = '".$ver['id']."' AND codigo_usuario = '".$codigo_usuario."'");	
	 

	$verificar_megusta = mysqli_num_rows($sql_megustas); ?>

			<!--ventana popup-->
			<div class="popup_background" id="popup">
				<div class="popup">
				<section class="texto">
					<h1>Gracias por tu voto</h1>
				</section>

				<section class="abajo">
					Redirecionando	
				</section>
				</div>
			</div>


	<div class="selecion">
		<!--<img class="imagenes_votacion" src='../img/Selecionados/<?php echo $ver['imagen'];?>'>-->
		<iframe class="imagenes_votacion" src='<?php echo $ver['imagen'];?>'  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<br>
		<center>
		<div class="info">
		<div>
		<h2><?php echo $ver['nombre'];?></h2>

		<?php

		$verificar_selecion = $con->query("SELECT * FROM megustas WHERE codigo_usuario = '".$codigo_usuario."' AND categoria = '".$categoria."'");
			

		if (mysqli_num_rows($verificar_selecion) > 0){ 

			echo "<button class='button'>Ya votaste</button>";

		}else{

		 if ($verificar_megusta == 0) { ?>
			<!--boton popup
			<button  class="button">Selecionar</button>-->
			
			<input type="submit" onclick="onpopup();" class="id_selecion button" id="<?php echo $ver['id'];?>" value="Votar">
			

			<?php }else{ ?>

				<input type="submit" class="id_selecion button" id="<?php echo $ver['id'];?>" value="Selecionado">

			<?php } }?>	
		</div>
		</div>
		</center>
	</div>

<?php }	  ?>
		</div>
	</div>
</div>
</center>
<script src="../js/script.js"></script>
<script src="../js/cuenta_regresiva.js"></script>
</body>
</html>

