<?php 

require_once "conexion.php";

Class ModeloCategorias {

	static public function mdlListarCategorias($tabla) {
		//creamos consulta
		$sql = "SELECT * FROM $tabla ORDER BY nombreCategoria ASC";
		//preparamos la consulta
		$stmt = Conexion::conectar()->prepare($sql);
		//ejecutamos la consulta
		$stmt->execute();
		//retornamos todos los registros
		return $stmt->fetchAll();
	}

}
