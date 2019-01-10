<?php
include('libs/conexion.php');

$nombre = $_POST['nombre'];
$fecha = date('Y-m-d');

$sql = "INSERT INTO categorias(nombre,fecha) VALUES ('".$nombre."','".$fecha."')";

if (Conexion::ejecutar($sql)) {
	header('Location: ../success.php');
}else{
	header('Location: ../fail.php');
}


?>