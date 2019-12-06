<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="views/">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7ff0a0897d.js"></script>

    
    <title>MARKETSUR</title>
  </head>
  <body>

    <?php 
    
      include ("modules/header.php");

      if ( isset($_SESSION["id"]) &&
          isset($_GET["accion"]) && 
          $_GET["accion"] == "publicar") {

        include ("modules/publicar-aviso.php");

      } else if ( isset($_SESSION["id"]) &&
          isset($_GET["accion"]) && 
          $_GET["accion"] == "cerrarSesion") {

        include ("modules/cerrar-sesion.php");        

      } else {

        include ("modules/buscador.php");
        include ("modules/resultados-avisos.php");

      }

      

      //incluimos ventanas modales
      include ("modules/modales.php");

    ?>

    <script src="resources/js/jquery-3.4.1.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/usuarios.js"></script>
    <script src="resources/js/avisos.js"></script>
    
    
  </body>
</html>