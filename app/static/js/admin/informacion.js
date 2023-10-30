$(document).ready(function () {
    var z = $("#datos_usuarios")
    $.ajax({
        url: appData.uri_ws + "backend/get_informacion/",
        dataType: "json",
        type: "Post",
    })
        .done(function (obj) {
            console.log(obj);
            $.each(obj.dato, function (i, p) {
                var usuarios =
                    '<div id="' + p.id_usuario + '">' +  
                    '<div> <strong>id: </strong>' + p.id_usuario + '</div>' +
                    '<div> <strong>usuario: </strong>' + p.nombre_usuario + '</div>' +
                    '<div> <strong>password: </strong>' + p.password + '</div>' +
                    '<div> <strong>activo: </strong>' + p.activo + '</div>' +
                    '</div>';
                z.append(usuarios);
            });
        })
        .fail();
});