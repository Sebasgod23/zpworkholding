$(document).ready(function () {
    get_all_images_ilus()
	.then(function (response) {
		//alerta("success", response.msj);
		console.log(response);
		var ilustracionesContainer = $("#img_ilustracion"); // Contenedor

		for (var i = 0; i < response.data.length; i++) {
			var ilustracion = response.data[i];
			var cardHtml = '<div class="col-md-4 mb-4">';
			cardHtml += '<div class="card text-bg-dark h-100">'; // Agregamos la clase h-100
			cardHtml +=
				'<img src="' +
				appData.Urlimg +
				"/" +
				ilustracion.imagen +
				'" alt="" class="card-img-top img-fluid" loading="lazy">'; // Agregamos las clases img-fluid
			cardHtml += '<div class="card-img-overlay">';
			cardHtml += "</div>";
			cardHtml += '<div class="card-body text-center">';
			cardHtml +=
				'<h5 class="card-title text-white">' + ilustracion.descripcion + "</h5>";
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
