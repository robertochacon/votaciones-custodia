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

$sql = "INSERT INTO votacion(categoria,nombre,evangelizacion,biografia_logros,discografia,lugar_servicio_pastoral,imagen,correo,telefono,megustas,status,fecha) 
VALUES ('".$categoria."','".$nombre."','".$año."','".$biografia."','".$discografia."','".$servicio_pastoral."','".$imagen."','".$email."','".$telefono."',0,'bloqueado','".$fecha."')";

// $sql = "INSERT INTO votacion (categoria,nombre,evangelizacion,biografia_logros,discografia,lugar_servicio_pastoral,imagen,correo,telefono,megustas,status) VALUES (2222,'','','','','','','','',0,'')";

echo var_dump($_POST);

		if (Conexion::ejecutar($sql)) {
			// header('Location: ../success.php');
			echo "good";
			return true;
		}else{
			// header('Location: ../fail.php');
			echo "bad";
			return false;
		}

// echo var_dump($_POST);
// }else{
// 	// header('Location: ../fail.php');
// 	return false;
// }

?>