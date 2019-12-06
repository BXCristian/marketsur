<?php

Class ControladorCiudades{
	static public function ctrListarCiudades(){
		$tabla = "ciudades";
		$resultado = ModeloCiudades::mdlListarCiudades($tabla);
		return $resultado;
	}
}
?>