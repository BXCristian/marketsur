<?php 
require_once "controllers/template.controller.php";
require_once "controllers/categorias.controller.php";
require_once "controllers/ciudades.controller.php";
require_once "controllers/avisos.controller.php";

require_once "models/categorias.modelo.php";
require_once "models/ciudades.modelo.php";
require_once "models/avisos.modelo.php";

$template = new Template();
$template->getTemplate();




