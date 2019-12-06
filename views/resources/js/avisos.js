
$(document).ready(funcionesAvisos)

function funcionesAvisos() {

	$("#formularioPublicarAviso").submit(agregarAviso)

	function nuevoAviso(evento) {
		//previene la acción por defecto de un evento submit, 
		//que es recargar la página
		evento.preventDefault()

		var datos = new FormData( $("#formularioPublicarAviso")[0]  )

		$.ajax({
			url : "../ajax/avisos.php",
			type : "post",
			data : datos,
			processData : false,
			contentType : false,
			success : function(respuesta) {
				console.log(respuesta)
				if (respuesta == "archivoIncorrecto") {
					console.log(respuesta)
					$("#mensajeAviso").html('<div class="alert alert-danger">Archivo incorrecto, debe subir una imagen JPG</div>')
				} else if (respuesta == "error") {
					$("#mensajeAviso").html('<div class="alert alert-danger">No se pudo realizar el registro</div>')

				} else if (respuesta == "exito") {
					$("#mensajeAviso").html('<div class="alert alert-success">Registro Exito</div>')

					setTimeout(function(){ 
						$("#registrarUsuario").modal().hide()
						$("#iniciarSesion").modal().show()
					}, 2000 )
				}
			}

		})
		

	}

}

