$('document').ready(function () {   
    // busca parametros GET
    checkQueryParams();
    // Posicion de las nitificaciones
    alertify.set('notifier', 'position', 'top-right');


    $('#form_login').submit(function (e) {
        //evita el comportamiento normal del submit, es decir, recarga total de la página
        e.preventDefault();
        // Contiene los datos del formulario
        formData = new FormData(this);
        formData.append('user_login', 1); // if(isset($_POST['user_login']))
        // XMLHttpRequest
        $.ajax({
            url: "assets/php/registro-user.php",
            type: "POST",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'JSON',
            success: function (respuesta) {
                console.log(respuesta);
                if (respuesta.match == 1) {
                    /* Envía a la pagina de login */
                    window.open('index.html', '_self');
                } else if (respuesta.match == 0){
                    alertify.error('Usuario o contraseña incorrecta');
                } else if (respuesta.status == 'error'){
                    alertify.error('Error del servidor');
                    console.log(respuesta);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alertify.error('Error en el servidor');
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });

    });

    // FUNCIONES
    function checkQueryParams() {
        const $_GET = getQueryParams(document.location.search);
        if ($_GET.registro == 'exito') {
            $("#msgInicioSesion").show();
        }

    }
    // obitne los datos GET
    function getQueryParams(qs) {
        qs = qs.split("+").join(" ");
        var params = {},
            tokens,
            re = /[?&]?([^=]+)=([^&]*)/g;
        while (tokens = re.exec(qs)) {
            params[decodeURIComponent(tokens[1])]
                = decodeURIComponent(tokens[2]);
        }
        return params;
    }
});
