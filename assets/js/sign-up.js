$('document').ready(function () {
    var firstName_state = false;
    var lastName_state = false;
    var email_state = false;
    var password_state = false;
    var pwdreRepeat_state = false;
    var inputPhone_state = false;
    // Posicion de las nitificaciones
    alertify.set('notifier', 'position', 'top-right');

    $('#form_register').submit(function (e) {
        //evita el comportamiento normal del submit, es decir, recarga total de la página
        e.preventDefault();
        var correo = $('inputEmail').val()
        if (!firstName_state ||
            !lastName_state ||
            !email_state ||
            !inputPhone_state ||
            !password_state ||
            !pwdreRepeat_state) {
            alertify.error('Completa el formulario');
        } else {
            formData = new FormData(this);
            formData.append('registro', 1); // if(isset($_POST['registro']))
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
                    if (respuesta.status === 'exito') {
                        /* Envia a la pagina de login */
                        window.open('login.html?registro=exito', '_self')
                        /* limpia formulario */
                        // $('#form_register')[0].reset();
                        /* notifica exito */
                        // alertify.success('Registro exitoso');
                    } else {
                        alertify.error('No se pudo registrar');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alertify.error('Error en el servidor');
                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        }
    });

    // Nombre(s)
    $('#firstName').on('blur', function () {
        var firstName = $('#firstName').val();
        if (firstName == '') {
            firstName_state = false;
            $('#firstName').removeClass("is-valid");
            $('#firstName').addClass("is-invalid");
            $('#firstName-feedback').text('Ingresa tu nombre');
        } else {
            firstName_state = true;
            $('#firstName').removeClass("is-invalid");
            $('#firstName').addClass("is-valid");
        }
    });

    // Apellido(s)
    $('#lastName').on('blur', function () {
        var lastName = $('#lastName').val();
        if (lastName == '') {
            lastName_state = false;
            $('#lastName').removeClass("is-valid");
            $('#lastName').addClass("is-invalid");
            $('#lastName-feedback').text('Ingresa tu apellido');
        } else {
            lastName_state = true;
            $('#lastName').removeClass("is-invalid");
            $('#lastName').addClass("is-valid");
        }
    });

    // Teléfono
    $('#inputPhone').on('blur', function () {
        var inputPhone = $('#inputPhone').val();
        if (inputPhone == '') {
            inputPhone_state = false;
            $('#inputPhone').removeClass("is-valid");
            $('#inputPhone').addClass("is-invalid");
            $('#inputPhone-feedback').text('Ingresa tu número de télefono');
        } else if (inputPhone.length != 10) {
            inputPhone_state = false;
            $('#inputPhone').removeClass("is-valid");
            $('#inputPhone').addClass("is-invalid");
            $('#inputPhone-feedback').text('Ingresa un número telefónico de 10 dígitos');
        } else {
            inputPhone_state = true;
            $('#inputPhone').removeClass("is-invalid");
            $('#inputPhone').addClass("is-valid");
        }
    });

    // EMAIL
    $('#inputEmail').on('blur', function () {
        var email = $('#inputEmail').val();
        if (email == '') {
            email_state = false;
            return;
        }
        if (!ValidateEmail(email)) {
            email_state = false;
            $('#inputEmail').removeClass("is-valid");
            $('#inputEmail').addClass("is-invalid");
            $('#inputEmail-feedback').text('Ingresa un correo electrónico válido');
        }
        else {
            $.ajax({
                url: 'assets/php/registro-user.php',
                type: 'POST',
                data: {
                    'user_duplicate': 1,
                    'email': email,
                },
                dataType: 'JSON',
                success: function (respuesta) {
                    console.log(respuesta);
                    if (respuesta.duplicado == 1) {
                        email_state = false;
                        $('#inputEmail').removeClass("is-valid");
                        $('#inputEmail').addClass("is-invalid");
                        $('#inputEmail-feedback').text('Correo electrónico no disponible');
                    } else if (respuesta.duplicado == 0) {
                        email_state = true;
                        $('#inputEmail').removeClass("is-invalid");
                        $('#inputEmail').addClass("is-valid");
                    } else {
                        console.log(respuesta);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }

            });
        }
    });

    // PASSWORD
    $('#passwordInput').on('change', function () {
        var pwd = $('#passwordInput').val();
        if (CheckPassword(pwd)) {
            password_state = true;
            $('#passwordInput').removeClass("is-invalid");
            $('#passwordInput').addClass("is-valid");
        } else {
            password_state = false;
            $('#passwordInput').removeClass("is-valid");
            $('#passwordInput').addClass("is-invalid");
            $('#passwordInput-feedback').text(
                '6 a 20 caracteres, un dígito numérico, al menos una mayúscula y una minúsucula'
            );
        }
    });

    // PASSWORD REPEAT
    $('#passwordRepeat').on('change', function () {
        var pwd = $('#passwordInput').val();
        var pwdReapeat = $('#passwordRepeat').val();
        if (pwd === pwdReapeat) {
            pwdreRepeat_state = true;
            $('#passwordRepeat').removeClass("is-invalid");
            $('#passwordRepeat').addClass("is-valid");
        } else {
            pwdreRepeat_state = false;
            $('#passwordRepeat').removeClass("is-valid");
            $('#passwordRepeat').addClass("is-invalid");
            $('#passwordRepeat-feedback').text('Las contraseñas no coinciden');
        }
    });

    // FUNCIONES
    
    // 6 a 20 caracteres, un dígito numérico, al menos una mayúscula y una minúsucula
    function CheckPassword(inputtxt) {
        var passw = /^(?=.*\d)(?!.*\s)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        if (inputtxt.match(passw)) {
            return true;
        } else {
            return false;
        }
    }
    // Compara el correo contra una expresión regular (regex)
    function ValidateEmail(inputText) {
        const regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (inputText.match(regex)) {
            return true;
        } else {
            return false;
        }
    }
});
