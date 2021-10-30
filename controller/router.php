<?php

class MainRouter {

	public static function router() {

		$url = (isset($_GET['url'])) ? $_GET['url'] : 'painel';
		$url = array_filter(explode('/', $url));

		return $url;
	}

	public static function rota() {

		$url = self::router();

		if ($url[0] == "painel") {

			
			if (isset($_SESSION["idUser"]) && !empty($_SESSION["idUser"])) {

				require_once 'view/painel.php';

			}else {

				header("location: ".BASE."login/");

			}
			
		}elseif($url[0] == "login") {

			if (isset($url[1])) {
				header("location: ".BASE."login/");
			}

			if (isset($_SESSION["idUser"]) && !empty($_SESSION["idUser"])) {
				header("location: ".BASE."painel/");
			}else {


			require_once 'view/login.php';
			}	

		}
	}
	
}