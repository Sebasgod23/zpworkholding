$(document).ready(function () {
    /* petición de la base de datos ajax */
    var z = $("#datos_usuarios")
    $.ajax({
        url: appData.uri_ws + "backend/get_usuarios/",
        dataType: "json",
        type: "Post",
    })
        .done(function (obj) {
            console.log(obj);
            $.each(obj.dato, function (i, p) {
                var usuarios =
                    '<div id="' + p.id_usuario + '">' +
                    '<div> <strong>Nombre: </strong>' + p.nombre_usuario + '</div>' +
                    '<button id="btn-elimanar-pro" onclick="click_btn_borrar(' + p.id_usuario + ')" ><i class="bi bi-trash-fill"></i></button>' +
                    '</div>';
                z.append(usuarios);
            });
        })
        .fail();

    $(document).on("submit", "#formulario", function (e) {
        e.preventDefault();
        $.ajax({
            url: appData.uri_ws + "backend/insert_datos/",
            dataType: "json",
            type: "Post",
            data: {
                nombre_usuario: $("#username").val(),
                password_usuario: $("#password").val()
            }
        })
            .done(function (obj) {
                setInterval(actualizar, 1000);
            })
            .fail();
    });
    //--------- ELIMINA usuarios --------
    $(document).on("click", "#btn-elimanar-pro", function () {
        $.ajax({
            url: appData.uri_ws + "backend/eliminar_usuario/",
            dataType: "json",
            type: "post",
            data: {
                id_usuario: appData.id_usuario
            }
        })
            .done(function (obj) {
                setInterval(actualizar, 1000);
            })
            .fail(error_ajax);
    });
});

function actualizar() {
    location.reload(true);

}
function click_btn_borrar(id_usuario) {
    appData.id_usuario = id_usuario

}


