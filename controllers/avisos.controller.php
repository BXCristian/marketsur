<?php 

Class ControladorAvisos {

	static public function ctrListarUsuarios() {

		$tabla = "usuarios";

		$resultado = ModeloUsuarios::mdlListarUsuarios($tabla);

		return $resultado;

	}
	static public function ctrInciarSesion($user, $password) {

		$tabla = "usuarios";

		$resultado = ModeloUsuarios::mdlIniciarSesion($user,$password);

		return $resultado;

	}
}

