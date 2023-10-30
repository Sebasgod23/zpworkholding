$(document).ready(function () {
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
				cardHtml += '<div class="overlay text-center mt-4">';
				cardHtml += '<a class="">Maquinas</a>';
				cardHtml += "</div>";
				cardHtml += "</div>";
				cardHtml += "</div>";
				ilustracionesContainer.append(cardHtml);
			}
		})
		.catch(function () {
			console.log("Error al obtener las imágenes.");
		});
});
