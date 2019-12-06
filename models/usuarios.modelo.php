<?php 

require_once "conexion.php";

Class ModeloUsuario {

	static public function mdlRegistrarUsuario($nombre, $correo, $password, $telefono, $imagen) {

		/*foreach ($imagen as $key => $value) {
			echo $key . " : ".$value."<br>";
		}*/

		$rutaTemporal = $imagen["tmp_name"];
		$tipoArchivo = $imagen["type"];
		$nombreImagen = $imagen["name"];

		if ($tipoArchivo == "image/jpg" ||
			$tipoArchivo == "image/jpeg") {

			$destino = "../views/resources/img/usuarios/".$nombreImagen;

			$sql = "INSERT INTO usuarios() VALUES (null, '$nombre', '$correo', '$password', '$telefono', '$destino', 0 )";

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

	static public function mdlIniciarSesion($user, $password) {

		$sql = "SELECT * FROM usuarios WHERE correoUsuario = '$user' AND passwordUsuario= '$password'";

		$stmt = Conexion::conectar()->prepare($sql);

		$stmt->execute();

		if ($stmt->rowCount() > 0) {

			$respuesta = $stmt->fetch();
		} else {
			$respuesta = "cero";
		}
		return $respuesta;
	}

}