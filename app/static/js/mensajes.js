$(document).ready(function () {
	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
		},
	});
});
function error_formulario(campo, mensaje) {
	$("#group-" + campo).append(
		$("<div>", {
			class: "invalid-feedback",
			text: mensaje,
		})
	);
	$("#" + campo)
		.addClass("is-invalid")
		.focus();
}
function borra_mensajes() {
	$(".is-invalid").removeClass("is-invalid");
	$(".invalid-feedback").remove();
}
function error_ajax() {
	//alerta("danger", "System Error");
	//setInterval(actualizar, 1000);
}
function alerta(tipo, mensaje) {
	switch (tipo) {
		case "success":
			icono = "bi bi-check2-circle";
			claseAlerta = "custom-success";
			break;
		case "info":
			icono = "bi bi-exclamation-lg";
			claseAlerta = "custom-info";
			break;
		case "warning":
			icono = "bi bi-exclamation-triangle";
			break;
		case "danger":
			icono = "bi bi-exclamation-circle";
			claseAlerta = "custom-danger";
			break;
	}
	$("#mensaje").append(
		'<div class="alert ' +
			claseAlerta +
			' alert-dismissible fade show" role="alert"><i class="' +
			icono +
			' h4"></i> ' +
			mensaje +
			"</div>"
	);

	setTimeout(function () {
		$(".alert-dismissible").fadeOut(1000, function () {
			$(this).remove();
		});
	}, 3000);
}
function actualizar() {
	location.reload(true);
}
function fecha_fancy(sFecha) {
	const ames = [
		"ene",
		"feb",
		"mar",
		"abr",
		"may",
		"jun",
		"jul",
		"ago",
		"sep",
		"oct",
		"nov",
		"dic",
	];

	// recibe fecha en formato yyyy-mm-dd
	aFecha = sFecha.split("-");

	return aFecha[2] + "-" + ames[aFecha[1] - 1] + "-" + aFecha[0];
}
function get_all_images_conocenos() {
	return new Promise(function (resolve, reject) {
		$.ajax({
			url: appData.uri_ws + "backend/get_all_images_conocenos",
			dataType: "json",
			method: "POST",
			success: function (response) {
				if (response.status == 200) {
					resolve(response);
				}
				if (response.status == 400) {
					alerta("info", response.msj);
				}
			},
			error: function () {
				error_ajax();
			},
		});
	});
}
function get_all_images_portafolio() {
	return new Promise(function (resolve, reject) {
		$.ajax({
			url: appData.uri_ws + "backend/get_all_images_portafolio",
			dataType: "json",
			method: "POST",
			success: function (response) {
				if (response.status == 200) {
					resolve(response);
				}
				if (response.status == 400) {
					alerta("info", response.msj);
				}
			},
			error: function () {
				error_ajax();
			},
		});
	});
}
