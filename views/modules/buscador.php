<form id="buscadorAvisos" class="buscador py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php 
					$resultadoCat = ControladorCategorias::ctrListarCategorias();
				?>
				<select name="categoria" required class="form-control">
					<option value="">Seleccione Categoria</option>
					<?php 

					foreach ($resultadoCat as $key => $value) {
						echo '<option value="'.$value["idCategoria"].'">'.$value[1].'</option>';
					}

					?>
				</select>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php
					$resultadoCiu = ControladorCiudades::ctrListarCiudades();
				?>
				<select name="ciudad" required class="form-control">
					<option value="">Seleccione Ciudad</option>
					<?php 

					foreach ($resultadoCiu as $key => $value) {
						echo '<option value="'.$value["idCiudad"].'">'.$value[1].'</option>';
					}

					?>
				</select>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="pt-2">
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ordenarPrecio" id="menor" value="precioMenor" checked>
					  <label class="form-check-label" for="menor">Menor Precio</label>	
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ordenarPrecio" id="mayor" value="precioMayor">
					  <label class="form-check-label" for="mayor">Mayor Precio</label>
					</div>		
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<button type="submit" class="btn btn-warning btn-block">Buscar</button>
			</div>
		</div>
	</div>
</form>