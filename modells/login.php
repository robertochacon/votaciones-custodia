<?php

include('libs/conexion.php');

$email = $_POST['email'];
$clave = $_POST['clave'];

$cx = Conexion::getConexion();
$sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND clave = '{$clave}'";
$query = mysqli_query($cx, $sql);
$count = mysqli_num_rows($query);
if ($count == 1) {

	$datos = mysqli_fetch_array($query);
	session_start();
	$_SESSION['id_user'] = $datos['id_user'];
	$_SESSION['email'] = $datos['email'];
	$_SESSION['nombre_user'] = $datos['nombre'];

	header("Location: ../views/dentro.php");
	// echo "1";
}else{
	header('Location: ../fail.php');
}


?>

