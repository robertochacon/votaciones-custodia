<?php
session_start();
if (!isset($_SESSION['nombre_user'])) { ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Votaciones, un sitio web donde puedes votar por tus artistas preferidos dependiendo de sus generos.">
    <meta name="keywords" content="votaciones,musica,premios custodia">
    <meta name="author" content="Roberto Chacon A.">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>votos</title>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/materialize.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/material_icons/stylesheet.css">
	<link rel="icon" type="image/png" href="img/logo.png">
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

<div class="container">


<div class="row justify-content-center animated fadeIn">
<div class="col-sm-12 col-md-6 col-lg-6">

<ul class="nav nav-tabs mt-5" id="myTab" role="tablist" style="background:black;color:black;">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registrate</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent"  style="background:white;">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<div class="container">
 <form action="modells/login.php" method="POST" class="pt-3">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introdusca su email">
  </div>
  <div class="form-group">
    <label for="clave">Password</label>
    <input type="password" name="clave" class="form-control" id="clave" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-warning mb-3">Ingresar</button>
</form>
</div>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	
  	<div class="container">
 <form action="modells/registro.php" method="POST" class="pt-3">
   <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introdusca su nombre">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introdusca su email">
  </div>
  <div class="form-group">
    <label for="clave">Clave</label>
    <input type="password" name="clave" class="form-control" id="clave" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-warning mb-3">Registrar</button>
</form>
</div>

  </div>
</div>

</div>
</div>








<!-- <div class="row"></div>
  <div class="row">
    <div class="col s12 m6">
      <ul class="tabs">
        <li class="tab col s5"><a href="#test1" class="active">Login</a></li>
        <li class="tab col s5"><a href="#test2">Registro</a></li>
      </ul>
	    </div>
    <div id="test1" class="col s12">
    	
	  <div class="row">
    <div class="col s12 m6" style="margin:auto;">
      <div class="card black-grey darken-1" style="margin:auto;">
        <div class="card-content black-text">
          <div class="row">
    		<form class="col s12 m12" action="modells/login.php" method="POST">

		          <input type="email" name="email" required="" placeholder="Email" class="validate">
		
		          <input type="password" name="clave" required="" placeholder="Clave" class="validate">
		       
		        <input type="submit" value="Ingresar" class="waves-effect waves-light btn-large" style="width:100%;background:yellow;">
		    
    		</form>
  		  </div>
        </div>
      </div>
    </div>
  </div>

    </div>
    <div id="test2" class="col s12">
    	

	 <div class="row">
    <div class="col s12 m6" style="margin:auto;">
      <div class="card black-grey darken-1" style="margin:auto;">
        <div class="card-content black-text">
          <div class="row">
    		<form class="col s12 m12" action="modells/registro.php" method="POST">

		          <input id="icon_prefix" type="text" name="nombre" maxlength="30" minlength="5" required="" placeholder="Nombre" class="validate">

		          <input id="icon_telephone" type="email" name="email" maxlength="30" minlength="5" required="" placeholder="Email" class="validate">

		          <input id="icon_telephone" type="password" name="clave" maxlength="30" minlength="5" required="" placeholder="Clave" class="validate">		 

		          <input type="submit" value="Registrar" class="waves-effect waves-light btn-large" style="width:100%;background:yellow;">
		        	
    		</form>
  		  </div>
        </div>
      </div>
    </div>
  </div>

    </div>
  </div> -->


</div>
<a class="waves-effect waves-teal btn-flat">
	<?php if (isset($_GET['mensaje'])) {echo "Datos incorrectos";}else{}?>
</a>

<script>
  $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>

<script src="js/script.js"></script>
<script src="js/cuenta_regresiva.js"></script>
<!-- <script src="js/materialize.min.js"></script> -->
<script src="js/bootstrap.min.js"></script>
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
