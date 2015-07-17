var flagTyc = false,
	archivo;
function paso2() {
	$('.paso-1').fadeToggle('fast', 'swing', function() {
		$('.paso-2').show('fast');
	});
}
function ValidateExtension() {
	var allowedFiles = ['.mp4', '.wmv', '.mov', '.webm'];
	var fileUpload = $('#archivo');
	var lblError = $('#mensajeArchivo');
	var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
	if (!regex.test(fileUpload.val().toLowerCase())) {
		lblError.html("Solo archivos de video.");
		lblError.show('fast').delay(3000).hide('fast');
		return false;
	}
	lblError.html('');
	return true;
}
$(document).ready(function () {
	$("#dni").bind("keydown", function (event) {
		if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
				// Allow: Ctrl+A
				(event.keyCode == 65 && event.ctrlKey === true) || 
				// Allow: home, end, left, right
				(event.keyCode >= 35 && event.keyCode <= 39)) {
				// let it happen, don't do anything
			return;
		} else {
			// Ensure that it is a number and stop the keypress
			if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
				event.preventDefault();
			}
		}
	});
	$('.entrar').click(function() {
		var mensaje = 'Ingresa tu DNI correctamente!';
		var dni = $('#dni').val();
		if (parseInt(dni) > 0) {
			if (dni.length >= 8) {
				$('#dni').addClass('procesando');
				// validar el dni
				$.ajax({
					url:urlBase + '/tuDni',
					type:'POST',
					data:'dni=' + dni,
					dataType:'text',
					success: function (data) {
						$('#dni').removeClass('procesando');
						if (data === 'ok' || data === 'gracias') {
							$('#inicio').fadeToggle('fast', 'swing', function() {
								$('#tuDni').val(dni);
								$('#subirVideo').fadeToggle('slow');
							});
							return false;
						} else if (data === 'error') {
							mensaje = 'Lo sentimos, pero el acceso es únicamente para trabajadores de Entel ;)';
							$('#mensajeError').html(mensaje).stop().fadeIn('fast').delay(3000).fadeOut('fast');
							return false;
						} /* else if (data === 'gracias') {
							$('#inicio').fadeToggle('fast', 'swing', function() {
								$('#mensajeGracias').fadeToggle('slow');
							});
							return false;
						}*/
					}
				});
			} else {
				$('#mensajeError').html(mensaje).stop().fadeIn('fast').delay(3000).fadeOut('fast');
			}
		} else {
			$('#mensajeError').html(mensaje).stop().fadeIn('fast').delay(3000).fadeOut('fast');
		}
		return false;
	});
	$('.elegirArchivo').click(function() {
		if (!flagTyc) return false;
		$('#archivo').trigger('click');
		//paso2();
		return false;
	});
	$('#archivo').change(function(e) {
		if (ValidateExtension()) {
			paso2();
			var archivo = e.target.value;
			archivo = archivo.split('\\').pop().split('/').pop();
			$('.archivo').html(archivo);
			$('.archivo, #confirmar').show('fast');
		}
	});
	$('.tyc').click(function() {
		flagTyc = !flagTyc;
		$(this).toggleClass('ok');
		return false;
	});
	$('.tyc a').click(function(e) {
		e.stopPropagation();
	});
	$('#confirmar').click(function() {
		if (ValidateExtension()) {
			$('.progreso').show('fast');
			$('#enviarDatos').submit();
		}
		return false;
	});
});