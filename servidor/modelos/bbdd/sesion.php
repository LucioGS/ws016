<?php

	
	function nueva_sesion($id_usuario, $token, $caduca){	

		try {
			$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
			$sql = "INSERT INTO sesiones (id_usuario, token, caduca) VALUES (?,?,?)";
			$mbd->prepare($sql)->execute([$id_usuario, $token, $caduca]);
			$retorno = "ok";
		} catch (PDOException $e) {
			$retorno = $e->getMessage();
		}
		return $retorno;

    }




?>