<?php

include('libs/conexion.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$fecha = date('Y-m-d');

$verificar_email = "SELECT email FROM usuarios WHERE email = '{$email}'";

// var_dump(Conexion::verificar_email($verificar_email));
// exit();


if (Conexion::verificar_email($verificar_email)) {
	header('Location: ../fail.php');
}else{

	$sql = "INSERT INTO usuarios (nombre,email,clave,fecha) VALUES ('".$nombre."','".$email."','".$clave."','".$fecha."')";

	// $cx = Conexion::getConexion();
	// $query = mysqli_query($cx, $sql);
	if (Conexion::ejecutar($sql)) {
		header('Location: ../success.php');
	}else{
		header('Location: ../fail.php');
	}

}


?>