<?php


	require_once $_SERVER['DOCUMENT_ROOT'] . "/mongodb/vendor/autoload.php";
	
	class conexion{

		public static function conectar(){
			$servidor = "127.0.0.1";  // tu ip , la del servidor local, "localhost"
			$puerto = "27017";		  // puerto por defecto
			$usuario = "fatima";	  // usuario que creamos en mongo
			$password = "123456";
			$BD = "crud";			// base de datos

			//Crea algo como "mongo://escritor.123456@127.168.0.200:27017/crud"
			$cadenaConexion = "mongodb://". $usuario . ":" . $password . "@" . $servidor . ":" . $puerto . "/" . $BD;
										 try{
											$cliente = new MongoDB\Client($cadenaConexion);
											return $cliente->selectDatabase($BD);
										} catch (\Throwable $th){
											return $th;
										}
			// $cliente = new MongoDB\Client($cadenaConexion);
			
			
  



		}
	}

?>