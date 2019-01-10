<?php
include 'libs/conexion.php';
session_start();

// $_SESSION['nombre_user'] = $_COOKIE['usuario'];

$id = $_POST['id'];
$usuario = $_SESSION['id_user'];
// $categoria = $_POST['categoria'];

$con = Conexion::getConexion();

$sql = $con->query("SELECT * FROM megustas WHERE id_voto = '".$id."' AND codigo_usuario = '".$usuario."'");
$contar_megustas = mysqli_num_rows($sql);

if ($contar_megustas == 0) {

	$insertar = $con->query("INSERT INTO megustas(id_voto,codigo_usuario) VALUES ('".$id."','".$usuario."')");

	$modificar_megusta = $con->query("UPDATE votacion SET megustas = megustas+1 WHERE id = '".$id."'");

}else{

	$eliminar = $con->query("DELETE FROM megustas WHERE id_voto = '".$id."' AND codigo_usuario = '".$usuario."'");

	$modificar = $con->query("UPDATE votacion SET megustas = megustas-1 WHERE id = '".$id."'");

}

$sql_voto = $con->query("SELECT megustas FROM votacion WHERE id = '".$id."'");
$cont = mysqli_fetch_array($sql_voto);
$likes = $cont['megustas'];
//echo $contar['megustas'];

if ($contar_megustas >= 1) {
	$megusta = "Votar";
}else{
	$megusta = "Selecionado";
}

$datos = array('text' => $megusta);

echo json_encode($datos);

?>