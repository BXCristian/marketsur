<?php 
require_once "../models/avisos.modelo.php";
//isset valida si una variable está inicializada
if (isset($_POST["tipoOperacion"]) && $_POST["tipoOperacion"] == "agregarAviso" ) {
	
	$titulo = $_POST["titulo"];
	$precio = $_POST["precio"];
	$descripcion = $_POST["descripcion"];
	$imagen  = $_FILES["imagen"];
	$estado = $_POST["estado"];
	$categoria = $_POST["categoria"];
	$ciudad = $_POST["ciudad"];
	$idUsuario = $_POST["idUsuario"]

	$resultado = ModeloAvisos::mdlRegistrarAviso($titulo,$precio,$descripcion,$imagen,$estado,$categoria,$ciudad,$idUsuario);

	echo $resultado;
}