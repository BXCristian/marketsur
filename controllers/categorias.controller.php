<?php 

Class ControladorCategorias {

	static public function ctrListarCategorias() {

		$tabla = "categorias";

		$resultado = ModeloCategorias::mdlListarCategorias($tabla);

		return $resultado;

	}
}

