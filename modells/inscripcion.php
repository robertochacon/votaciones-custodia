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
if(move_uploaded_file($fileimage, $ruta)){

$sql = "INSERT INTO votacion(categoria,nombre,año_evangelizacion,biografia_logros,discografia,lugar_servicio_pastoral,imagen,correo,telefono,megustas,status,fecha) 
VALUES ('".$categoria."','".$nombre."','".$año."','".$biografia."','".$discografia."','".$servicio_pastoral."','".$imagen."','".$email."','".$telefono."','0','bloqueado','".$fecha."')";

	if (Conexion::ejecutar($sql)) {
		header('Location: ../success.php');
	}else{
		header('Location: ../fail.php');
	}

}else{
	header('Location: ../fail.php');
}

?>