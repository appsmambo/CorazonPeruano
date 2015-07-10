var flagTyc = false, 
	flagArchivo = false,
	flagConfirmar = true,
	archivo;
function paso2() {
	if (flagArchivo && flagTyc) {
		$('.paso-1').fadeToggle('fast', 'swing', function() {
			$('.paso-2').fadeToggle('slow');
		});
	}
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
		var dni = $('#dni').val();
		if (parseInt(dni) > 0) {  // validar si existe
			$('#inicio').fadeToggle('fast', 'swing', function() {
				$('#subirVideo').fadeToggle('slow');
			});
		}
		return false;
	});
	$('#elegirArchivo').click(function() {
		$('#archivo').trigger('click');
		return false;
	});
	$('#archivo').change(function() {
		archivo = $(this)[0].files[0];
		$('.archivo').html(archivo.name);
		flagArchivo = true;
		paso2();
	});
	$('.tyc').click(function() {
		flagTyc = !flagTyc;
		$(this).toggleClass('ok');
		paso2();
		return false;
	});
	$('#confirmar').click(function() {
		if (flagConfirmar)
			$('#enviarDatos').submit();
		return false;
	});
	$('#enviarDatos').submit(function(e) {
		e.preventDefault();
		$('#loader-icon').show();
		$(this).ajaxSubmit({
			beforeSubmit:function() {
				flagConfirmar = false;
				$('.progreso').fadeTo('slow', 1);
				$("#progress-bar").width('0%');
			},
			uploadProgress:function (event, position, total, percentComplete){
				$("#progress-bar").width(percentComplete + '%');
			},
			success:function (data) {
				// mensaje
				$('#subirVideo').fadeToggle('fast', 'swing', function() {
					$('#mensaje').fadeToggle('slow');
				});
			},
			resetForm:true
		});
		return false;
	});
	
	
});