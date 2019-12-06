<?php 

Class ControladorUsuarios {

	static public function ctrListarUsuarios() {

		$tabla = "usuarios";

		$resultado = ModeloUsuario::mdlListarUsuarios($tabla);

		return $resultado;

	}
	static public function ctrInciarSesion($user, $password) {

		$tabla = "usuarios";

		$resultado = ModeloUsuario::mdlIniciarSesion($user,$password);

		return $resultado;

	}
}

