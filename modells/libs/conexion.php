<?php

class Conexion{

public static $objeto = null;
public $conn;
 
	public function getConexion(){
		if (self::$objeto == null) {
			self::$objeto = new Conexion();
		}

		return self::$objeto->conn;
	}

	public function __construct(){
		$this->conn =  mysqli_connect("localhost","root","","votaciones") or die("<script>window.location='view/install.php'</script>");
	}

	public function ejecutar($sql){
		$cx = self::getConexion();
		$query = mysqli_query($cx, $sql);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function verificar_email($sql){
		$cx = self::getConexion();
		$query = mysqli_query($cx, $sql);
		$count = mysqli_num_rows($query);
		if ($count == 1) {
			return true;
		}else{
			return false;
		}
	}

	public function consultar($sql){
		$cx = self::getConexion();
		$ResultSet = mysqli_query($cx, $sql);
		$resultado = array();
		while ($filas = mysqli_fetch_array($ResultSet)) {
			$resultado[] = $filas;
		}
		return $resultado;
	}

	public function login($user, $pass){
		$cx = self::getConexion();
		$sql = "SELECT * FROM users WHERE usuario = '{$user}' AND clave = '{$pass}'";
		$query = mysqli_query($cx, $sql);
		$count = mysqli_num_rows($query);
		if ($count == 1) {

			$datos = mysqli_fetch_array($query);
			session_start();
			$_SESSION['id'] = $datos['id'];
			$_SESSION['user'] = $datos['usuario'];
			$_SESSION['role'] = $datos['role'];

			// header("Location: dentro.php");
			echo "1";
		}else{
			return false;
		}
	}

	public function __destruct(){
		mysqli_close($this->conn);
	}

}

?>