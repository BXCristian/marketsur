<?php 
require_once "../models/usuarios.modelo.php";
//isset valida si una variable está inicializada
if (isset($_POST["tipoOperacion"]) && $_POST["tipoOperacion"] == "registrarUsuario" ) {
	
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$password = $_POST["password"];
	$telefono = $_POST["telefono"];
	$imagen = $_FILES["imagen"];

	$resultado = ModeloUsuario::mdlRegistrarUsuario($nombre, $correo, $password, $telefono, $imagen);

	echo $resultado;
}
if (isset($_POST["tipoOperacion"]) && $_POST["tipoOperacion"] == "iniciarSesion" ) {

	$user = $_POST["correoUsuario"];
	$password = $_POST["passwordUsuario"];

	$resultado = ModeloUsuario::mdlIniciarSesion($user, $password);

	if ($resultado == "cero") {

		echo "Datos incorrectos";
	} else {
		session_start();
		$_SESSION["nombre"] = $resultado["nombreUsuario"];
		$_SESSION["id"]     = $resultado["idUsuario"];
		$_SESSION["autenticado"] = true;

		echo "exito";
	}


}