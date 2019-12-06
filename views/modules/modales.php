<!-- modal para iniciar sesión -->
<div class="modal fade" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mensajeIniciar">Iniciar Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formularioIniciarSesion">
		  <div class="form-group">
		    <label for="correoUsuario">Correo</label>
		    <input type="email" class="form-control" name="correoUsuario"  placeholder="Ingrese su correo">
		  </div>
		  <div class="form-group">
		    <label for="passwordUsuario">Password</label>
		    <input type="password" class="form-control" name="passwordUsuario" placeholder="Ingrese contraseña">
		  </div>
      <input type="hidden" value="iniciarSesion" name="tipoOperacion">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- modal para registrar usuario -->
<div class="modal fade" id="registrarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mensajesRegistrarse">Registrarme en MarketSur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formularioRegistrar">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nombre" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="correo" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="telefono" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Avatar</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="imagen" required>
            </div>
          </div>
          <input type="hidden" value="registrarUsuario" name="tipoOperacion">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Registrarme</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- modal para ingresar avisos -->

<div class="modal fade" id="nuevoAviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mensajeAviso">Publicar Aviso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formularioPublicarAviso">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Titulo:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="titulo" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Precio:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="precio" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Descripción:</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="2" name="descripcion"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="imagen" required>
            </div>
          </div>
          <div class="form-group row">
            <label id="selector" class="col-sm-2 col-form-label">Estado:</label>
            <div class="col-sm-10">
              <select class="form-control" id="selector">
                <option value="0">No publicado</option>
                <option value="1">Publicado</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label id="selector" class="col-sm-2 col-form-label">Categoria:</label>
            <div class="col-sm-10">
              <select name="categoria" required class="form-control">
                <?php 
                  $resultadoCat = ControladorCategorias::ctrListarCategorias();
                ?>
              <option value="">Seleccione Categoria</option>
                <?php 
                  foreach ($resultadoCat as $key => $value) {
                    echo '<option name="categoria" value="'.$value["idCategoria"].'">'.$value[1].'</option>';
                  }
                ?>
              </select>
            </div>
          </div>
          
          <div class="form-group row">
            <label id="selector" class="col-sm-2 col-form-label">Ciudad:</label>
            <div class="col-sm-10">
              <select name="ciudad" required class="form-control">
                <?php
                  $resultadoCiu = ControladorCiudades::ctrListarCiudades();
                ?>
              <option class="col-sm-10" value="">Seleccione Ciudad</option>
              <?php 
                foreach ($resultadoCiu as $key => $value) {
                  echo '<option name="ciudad" value="'.$value["idCiudad"].'">'.$value[1].'</option>';
              }
            ?>
            </select>
            </div> 
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Creador por: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="
                <?php
                  echo $_SESSION['nombre'];
                ?>" disabled="">
            </div>
          
          <input type="hidden" name="idUsuario" value="
          <?php
            echo $_SESSION['id'];
          ?>">    
          <input type="hidden" value="agregarAviso" name="tipoOperacion">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar aviso</button>
        </form>
      </div>
    </div>
  </div>
</div>