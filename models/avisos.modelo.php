<?php 

require_once "conexion.php";

Class ModeloAvisos {

	static public function mdlRegistrarAviso($titulo,$precio,$descripcion,$imagen,$estado,$categoria,$ciudad,$idUsuario) {

		$rutaTemporal = $imagen["tmp_name"];
		$tipoArchivo = $imagen["type"];
		$nombreImagen = $imagen["name"];

		if ($tipoArchivo == "image/jpg" || $tipoArchivo == "image/jpeg") {

			$destino = "../views/resources/img/avisos/".$nombreImagen;

			$sql = "INSERT INTO avisos() VALUES (null, $titulo,$precio,$descripcion,$imagen,$estado,$categoria,$ciudad,$idUsuario)";

			$stmt = Conexion::conectar()->prepare($sql);

			if ($stmt->execute()) {
				move_uploaded_file($rutaTemporal, $destino);
				$respuesta = "exito";
			} else {
				$respuesta = "error";
			}
		} else {
			$respuesta = "archivoIncorrecto";
		}
		echo $respuesta;
	}
}