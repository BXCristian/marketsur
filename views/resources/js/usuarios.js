
$(document).ready(funcionesUsuarios)

function funcionesUsuarios() {

	$("#formularioRegistrar").submit(registrarNuevoUsuario)
	$("#formularioIniciarSesion").submit(iniciarSesion)

	function registrarNuevoUsuario(evento) {
		//previene la acción por defecto de un evento submit, 
		//que es recargar la página
		evento.preventDefault()

		var datos = new FormData( $("#formularioRegistrar")[0]  )

		$.ajax({
			url : "../ajax/usuarios.php",
			type : "post",
			data : datos,
			processData : false,
			contentType : false,
			success : function(respuesta) {
				console.log(respuesta)
				if (respuesta == "archivoIncorrecto") {
					console.log(respuesta)
					$("#mensajesRegistrarse").html('<div class="alert alert-danger">Archivo incorrecto, debe subir una imagen JPG</div>')
				} else if (respuesta == "error") {
					$("#mensajesRegistrarse").html('<div class="alert alert-danger">No se pudo realizar el registro</div>')

				} else if (respuesta == "exito") {
					$("#mensajesRegistrarse").html('<div class="alert alert-success">Registro Exito</div>')

					setTimeout(function(){ 
						$("#registrarUsuario").modal().hide()
						$("#iniciarSesion").modal().show()
					}, 2000 )
				}
			}

		})
		

	}

	function iniciarSesion(e) {
		e.preventDefault()

		var datos = $(this).serialize()

		$.ajax({
			url : "../ajax/usuarios.php",
			type : "post",
			data : datos,
			success: function(respuesta) {

				if (respuesta == "Datos incorrectos") {
					$("#mensajeIniciar").html('<div class="alert alert-danger">Datos Incorrectos</div>')
				} else if (respuesta == "exito") {
					window.location.href = '../'
				}
			}
		})
	}

}

