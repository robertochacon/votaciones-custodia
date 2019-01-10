<?php


class Auth{
	
	protected static $redes = ['Facebook','Twitter','Gmail'];

	protected static function issetRequest(){
		if (isset($_GET['login'])) {
			if (in_array($_GET['login'], self::$redes)) {
				return true;
			}
		}
		return false;
	}

	public static function getUserAuth(){
		if (self::issetRequest()) {
			$service = $_GET['login'];
			$hybridAuth = new Hybrid_Auth(__DIR__.'\config.php');
			$adapter = $hybridAuth->authenticate($service);
			$userProfile = $adapter->getUserProfile();
			var_dump($userProfile);
			die();
		}
	}


}



?>