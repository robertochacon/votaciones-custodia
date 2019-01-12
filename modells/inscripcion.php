<?php
include('libs/conexion.php');

$categoria = $_POST['categoria'];
$nombre = $_POST['nombre'];
$año = $_POST['año'];
$biografia = $_POST['biografia'];
$discografia = $_POST['discografia'];
$servicio_pastoral = $_POST['servicio_pastoral'];
$imagen = $_FILES['imagen']['name'];
$fileimage = $_FILES['imagen']['tmp_name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = date('Y-m-d');

$ruta = "../img/selecionados";
$ruta = $ruta."/".$imagen;
// if(move_uploaded_file($fileimage, $ruta)){
move_uploaded_file($fileimage, $ruta);

// $sql = "INSERT INTO votacion(categoria,nombre,año_evangelizacion,biografia_logros,discografia,lugar_servicio_pastoral,imagen,correo,telefono,megustas,status,fecha) 
// VALUES ('".$categoria."','".$nombre."','".$año."','".$biografia."','".$discografia."','".$servicio_pastoral."','".$imagen."','".$email."','".$telefono."',0,'bloqueado','".$fecha."')";
$sql = "INSERT INTO votacion (categoria,nombre,año_evangelizacion,biografia_logros,discografia,lugar_servicio_pastoral,imagen,correo,telefono,megustas,status) VALUES (2,'roberto','2019','ninguna','ninguna','lugar','imagen','correo','8095594732',0,'bloqueado')";


// INSERT INTO votacion VALUES (4,1,'roberto','2019','ninguna','ninguna','lugar','imagen','correo','8095594732',0,'bloqueado');


	if (Conexion::ejecutar($sql)) {
		// header('Location: ../success.php');
		echo "good";
	}else{
		// header('Location: ../fail.php');
		echo "bad";
	}

// echo var_dump($_POST);
// }else{
// 	header('Location: ../fail.php');
// }

?>