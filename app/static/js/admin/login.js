$(document).ready(function () {
    $(document).on("submit", "#formulario", function (e) {
        e.preventDefault();
        $.ajax({
            url: appData.uri_ws + "backend/verificausuario",
            dataType: "json",
            type: "post",
            data: {
                usuario: $("#username").val(),
                pass: $("#password").val()
            }
        }).done(function (obj) {
            if (obj.resultado) {
                //alert("success", obj.mensaje);
                setTimeout(function () {
                    var url;
                    url = appData.uri_app + "backend/inicio/" + obj.usuario.id_usuario +
                        "/" + obj.token + "/" + obj.usuario.nombre_usuario
                        + "/" + obj.usuario.password
                    $(location).attr("href", url);
                }, 1000);
            } else {
                alert("warning", obj.mensaje);
            }
        })
            .fail()
    });
});




