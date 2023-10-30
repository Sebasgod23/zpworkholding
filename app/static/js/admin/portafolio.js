$(document).ready(function () {
	get_img_editar_portafolio();

	//------------------------ ELIMINAR IMAGEN ----------------------------
	$(document).on("click", "#eliminar_img", function (e) {
		e.preventDefault();
		$.ajax({
			url: appData.uri_ws + "backend/eliminar_img_portafolio",
			dataType: "json",
			method: "POST",
			data: {
				id: appData.id_eliminar_img,
			},
			success: function (response) {
				if (response.status == 700) {
					cerrarSesion();
				}
				if (response.status == 200) {
					alerta("success", response.msj);
					setInterval(actualizar, 1000);
				}
			},
			error: function () {
				error_ajax();
			},
		});
	});

	get_all_images_portafolio()
		.then(function (response) {
			//alerta("success", response.msj);
			console.log(response);
			var ilustracionesContainer = $("#img_portafolio"); // Contenedor
			for (var i = 0; i < response.data.length; i++) {
				var ilustracion = response.data[i];
				var cardHtml = '<div class="col-md-4 mb-4">';
				cardHtml += '<div class="h-100">'; // Agregamos la clase h-100
				cardHtml +=
					'<img src="' +
					appData.Urlimg +
					"/" +
					ilustracion.imagen +
					'" alt="" class="card-img-top img-fluid" loading="lazy">'; // Agregamos las clases img-fluid
				cardHtml += "</div>";
				cardHtml += "</div>";
				ilustracionesContainer.append(cardHtml);
			}
		})
		.catch(function () {
			console.log("Error al obtener las imágenes.");
		});

	$(document).on("submit", "#form_carrga_img_portafolio", function (e) {
		e.preventDefault();
		borra_mensajes();
		if ($("#modal-img").val() == "") {
			error_formulario("modal-img", "El campo no puede ir vacío");
			return false;
		}
		if ($("#modal-desc").val() == "") {
			error_formulario("modal-desc", "El campo no puede ir vacío");
			return false;
		}
		var formData = new FormData(this);
		$.ajax({
			url: appData.uri_ws + "backend/carrga_img_portafolio",
			dataType: "json",
			type: "post",
			data: formData,
			processData: false, // Evita el procesamiento automático de los datos
			contentType: false, // Evita el tipo de contenido predeterminado
		}).done(function (obj) {
			if (obj.status == 200) {
				alerta("success", obj.msj);
				setInterval(actualizar, 1000);
			} else if (obj.status == 400) {
				alerta("danger", obj.msj);
			}
		});
	});
});
//----------------------------------------------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------
function get_img_editar_portafolio() {
	$.ajax({
		url: appData.uri_ws + "backend/get_all_images_portafolio",
		dataType: "json",
		method: "POST",
		success: function (response) {
			if (response.status == 200) {
				//console.log(response);

				for (var i = 0; i < response.data.length; i++) {
					var image = response.data[i];

					var cardHtml = '<div class="col-md-2 mb-4">';
					cardHtml += '<div class="card h-100">';
					cardHtml +=
						'<img src="' +
						appData.Urlimg +
						"/" +
						image.imagen +
						'" class="card-img-top w-100 h-100" alt="Image">';
					cardHtml += '<div class="card-body">';
					cardHtml +=
						'<button style="font-size: 10px;" id="eliminar_img" class="btn btn-danger btn-sm" onclick="click_eliminar_img(' +
						image.id_imagen +
						')"><i class="bi bi-trash3"></i></button>';
					cardHtml += "</div>";
					cardHtml += "</div>";
					cardHtml += "</div>";
					$("#imangenes").append(cardHtml);
				}
			}
		},
		error: function () {
			error_ajax();
		},
	});
}
function click_eliminar_img(id) {
	appData.id_eliminar_img = id;
}
