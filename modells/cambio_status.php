<?php 
include('libs/conexion.php');

$id_participante = $_POST['id'];

$sql = "SELECT * FROM votacion WHERE id = '".$id_participante."'";
$datos = Conexion::consultar($sql);

foreach ($datos as $key => $value) {
	if ($value['status'] == 'desbloqueado') {
		
		$sql = "UPDATE votacion SET status = 'bloqueado' WHERE id = '".$id_participante."'";
		Conexion::ejecutar($sql);
		echo "cambio a bloqueado";
		return true;

	}else{

		$sql = "UPDATE votacion SET status = 'desbloqueado' WHERE id = '".$id_participante."'";
		Conexion::ejecutar($sql);
		echo "cambio a desbloqueado";
		return false;

	}
}

?>