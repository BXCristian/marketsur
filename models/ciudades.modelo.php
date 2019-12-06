<?php 

require_once "conexion.php";

Class ModeloCiudades {

	static public function mdlListarCiudades($tabla) {
		//creamos consulta
		$sql = "SELECT * FROM $tabla ORDER BY nombreCiudad ASC";
		//preparamos la consulta
		$stmt = Conexion::conectar()->prepare($sql);
		//ejecutamos la consulta
		$stmt->execute();
		//retornamos todos los registros
		return $stmt->fetchAll();



	}

}