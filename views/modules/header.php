<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="../index.php">MARKETSUR</a>
  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <form class="form-inline mr-auto my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Busca tu oferta" aria-label="Search">
      <button class="btn btn-warning my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <?php 
    session_start();


    if (isset($_SESSION["autenticado"]) && 
      $_SESSION["autenticado"] == true) {

      echo '
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            '.$_SESSION["nombre"].'
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
            <a href="../index.php?idUsuario='.$_SESSION["id"].'&accion=publicar" class="dropdown-item bg-warning" >Publicar Aviso</a>
            <a href="../index.php?idUsuario='.$_SESSION["id"].'&accion=perfil" class="dropdown-item" >Mi Perfil</a>
            <a href="../index.php?idUsuario='.$_SESSION["id"].'&accion=cerrarSesion" class="dropdown-item" >Cerrar Sesión</a>
          </div>
        </div>

    ';

    } else {
      echo '
        <div id="btnsIngresarRegistrarse">
          <button class="btn btn-dark" data-toggle="modal" data-target="#iniciarSesion">Ingresar</button>
          <button class="btn btn-dark" data-toggle="modal" data-target="#registrarUsuario">Registrarse</button>
        </div>
      ';
    }

    ?>
    
  </div>
</nav>