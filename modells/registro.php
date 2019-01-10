<?php

include('libs/conexion.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$role = "user";
$fecha = date('Y-m-d');

$verificar_email = "SELECT email FROM usuarios WHERE email = '{$email}'";

if (Conexion::verificar_email($verificar_email)) {
	header('Location: ../fail.php');
}else{

	$sql = "INSERT INTO usuarios (nombre,email,clave,role,fecha) VALUES ('".$nombre."','".$email."','".$clave."','".$role."','".$fecha."')";

	// $cx = Conexion::getConexion();
	// $query = mysqli_query($cx, $sql);
	if (Conexion::ejecutar($sql)) {
		header('Location: ../success.php');
	}else{
		header('Location: ../fail.php');
	}

}


?>