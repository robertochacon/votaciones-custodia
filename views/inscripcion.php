<?php
include '../modells/libs/conexion.php';
session_start();
if (isset($_SESSION['nombre_user'])) { ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Votaciones, un sitio web donde puedes votar por tus artistas preferidos dependiendo de sus generos.">
    <meta name="keywords" content="votaciones,musica,premios custodia">
    <meta name="author" content="Roberto Chacon A.">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>votos</title>
	<script src="../js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/toastr.css">
	<link rel="stylesheet" type="text/css" href="../fonts/material_icons/stylesheet.css">
	<link rel="icon" type="image/png" href="../img/logo.png">
</head>
<body>
	<header class="animated fadeInDown">
	<div class="header">

	<div class="aside_header"></div>

	<div class="centro">
		<div class="logo">
			<!-- <img src="../img/logo.png" width="100"> -->
		</div>
			<div class="centro_centro">
			<div class="paquete">
				<div>
					<img src="../img/logo.png" class="logo_responsive" width="100"><br>
				</div>
				<div class="cajas">
					<center><h3>Votacion Mi Voz Para Cristo 2018</h3></center>
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

	<label for="btn_menu" class="btn_menu"><img src="../img/menu.png"></label>
	<input type="checkbox" id="btn_menu">
	<div class="menu">
		<ul>
			<li><a href="../index.php">Inicio</a></li>
			<?php if($_SESSION['role_user'] == 'admin'){?>
			<li><a href="./categorias.php">Categorias</a></li>
			<li><a href="./participantes.php">Participantes</a></li>
			<?php }else{ ?>
			<li><a href="../index.php">Novedades</a></li>
			<li><a href="../index.php">Categoria</a></li>
			<li><a href="../index.php">Galeria</a></li>
			<li><a href="../index.php">Comite Organizador</a></li>
			<li><a href="../index.php">Contacto</a></li>
			<?php } ?>
			<li><a href="./inscripcion.php" class="activo">Inscribe a tu favorito</a></li>
			<li><a href="../modells/salir.php" style="color: red;">Salir</a></li>
		</ul>
	</div>

</header>

<div class="container">
	
	 
<div class="row justify-content-center">
	<div class="col-sm-12 col-md-6 col-lg-6 mt-3 pt-3 animated fadeIn" style="background: white;">
		<!-- <form action="../modells/inscripcion.php" method="POST" enctype="multipart/form-data"> -->
		<form id="participanteForm" method="POST" enctype="multipart/form-data">

		  <div class="form-group">
		    <label for="Nombre">Nombre</label>
		    <input type="text" name="nombre" class="form-control" id="Nombre" placeholder="Introdusca un nombre" required="">
		  </div>
		  <div class="form-group">
		    <label for="año">Año de evangelizacion</label>
		    <input type="number" name="año" class="form-control" id="año" placeholder="Introdusca un año" required="">
		  </div>
		  <div class="form-group">
		    <label for="biografia">Biografia y logros</label>
		    <textarea class="form-control" id="biografia" name="biografia" placeholder="Biografia y logros" rows="3"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="discografia">Discografia</label>
		    <input type="text" name="discografia" class="form-control" id="discografia" placeholder="Introdusca un discografia" required="">
		  </div>
		  <div class="form-group">
		    <label for="servicio_pastoral">Lugar de servicio pastoral</label>
		    <input type="text" name="servicio_pastoral" class="form-control" id="servicio_pastoral" placeholder="Introdusca un lugar de servicio pastoral" required="">
		  </div>
		  <div class="form-group">
		    <label for="imagen">Imagen</label>
		    <input type="file" name="imagen" class="form-control" id="imagen" placeholder="imagen" required="">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" name="email" class="form-control" id="email" placeholder="Introdusca un email" required="">
		  </div>
		  <div class="form-group">
		    <label for="telefono">Telefono</label>
		    <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Introdusca un telefono" required="">
		  </div>

		  <label class="my-1 mr-2" for="categorias">Categorias</label>
		  <select class="custom-select my-1 mr-sm-2" id="categorias" name="categoria">
		    <option selected>Selecionar</option>
		    <?php 
		    $categorias = Conexion::consultar('SELECT id,nombre FROM categorias');
		    foreach ($categorias as $key => $value) { ?>
		   		<option value="<?= $value['id']; ?>"><?= $value['nombre']; ?></option>
		    <?php } ?>
		  </select>

		  <button type="submit" class="btn btn-success mb-3">Agregar</button>
		</form>
	</div>
</div>
 

</div>
<a class="waves-effect waves-teal btn-flat">
	<?php if (isset($_GET['mensaje'])) {echo "Datos incorrectos";}else{}?>
</a>

<script src="../js/script.js"></script>
<script src="../js/cuenta_regresiva.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/toastr.min.js"></script>
</body>
</html>


<?php }else{ header("Location:views/dentro.php");}
// require_once('vendor/autoload.php');
// require_once('App/Auth/Auth.php');
// Auth::getUserAuth();
?>

<!-- <a href="?login=Facebook">Facebook</a>
<a href="?login=Twitter">Twitter</a>
<a href="?login=Gmail">Gmail</a> -->
