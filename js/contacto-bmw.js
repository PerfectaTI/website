$(document).ready(function(){
	$("#form-contacto").submit(function(event) {
		event.preventDefault();
		var nombre   = document.getElementById("nombre").value;
		var correo   = document.getElementById("correo").value;
		var telefono = document.getElementById("telefono").value;
		var modelo   = document.getElementById("modelo").value;
		var mensaje  = document.getElementById("mensaje").value;
		var captcha  = grecaptcha.getResponse();

		if(nombre == null || nombre.length == 0){
			$("#modal-texto").text("ERROR: Debe ingresar su nombre y apellido");
			$("#modal-contacto").modal();
			return false;
		}

		if (!validarEmail(correo)) {
			$("#modal-texto").text("ERROR: Debe ingresar un email válido. Ej: hola@gmail.com");
			$("#modal-contacto").modal();
			return false;
		}

		if (!validarTelefono(telefono)) {
			$("#modal-texto").text("ERROR: Debe ingresar un número de teléfono válido. Ej: 0981123123");
			$("#modal-contacto").modal();
			return false;
		}

		if (modelo == null || modelo.length == 0) {
		    $("#modal-texto").text("ERROR: Debe seleccionar un modelo.");
			$("#modal-contacto").modal();
		  	return false;
		}

		if(mensaje == null || mensaje.length == 0){
			$("#modal-texto").text("ERROR: Debe ingresar su mensaje válido");
			$("#modal-contacto").modal();
			return false;
		}

		if (captcha.length == 0) {
        	$("#modal-texto").text("ERROR: Debe seleccionar que no es un robot");
        	$("#modal-contacto").modal();
        	return false;
        }

		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = $(this).serialize(); //Encode form elements for submission
	
		$.ajax({
			url: post_url,
			type: request_method,
			data: form_data,
            success: function(respuesta){
                grecaptcha.reset();
                $("#modal-texto").text(respuesta);
				$("#modal-contacto").modal();
				if(respuesta == "Su mensaje ha sido enviado, muchas gracias"){
					$("#form-contacto")[0].reset();
				}
            }
		});

		function validarEmail(email) {
			var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regex.test(email);
		}

		function validarTelefono(telefono) {
			var regex = /^([0-9]{9,15})$/;
			return regex.test(telefono);
		}

	});
})