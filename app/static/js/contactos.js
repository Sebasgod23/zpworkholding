$(document).ready(function () {
    /* AJAX DE CONTACTOS  */
    $(document).on("submit", "#form_contactos", function (e) {
        e.preventDefault();
        $.ajax({
            url: appData.uri_ws + "backend/insert_contactos/",
            dataType: "json",
            type: "Post",
            data: {
                nombre: $("#name").val(),
                email: $("#email").val(),
                asunto: $("#subject").val(),
                telefono: $("#telefono").val(),
                mensaje: $("#message").val()
            }
        })
            .done(function (obj) {
                if (obj.resultado == true) {
                    $("#Modalsucces").modal('show');
                    $.ajax({
                        url: "http://localhost/envio/envioGmail.php",
                        dataType: "json",
                        type: "Post",
                        data: {
                            email: $("#email").val()
                        }
                    })
                        .done(function (obj) {
                        })
                        .fail();
                   // setInterval(actualizar, 2500);
                } else {
                    $("#Modalerror").modal('show');
                    //setInterval(actualizar, 2500);
                }
            })
            .fail();
    });
});

function actualizar() {
    location.reload(true);

}


