<!--  SITIO - INICIO DE SESIÓN -->
<?php
 
 ?>
<!DOCTYPE html>
<html>

    <!--ENCABEZADO-->
    <!--esme-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
        <title>Login</title>

        <!--Enlaces-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="assets/css/Header-Blue.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/floating-labels.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <!--CUERPO-->
    <body style="background: #E4AF4D;"> <!-- Background gris-->
      <header>
        <div class="py-2" style="background: #95140A;">
          <div class="container">
            <center><a href="empleos_publico.html"><img src="assets/img/Logo/color.png" class="img-fluid" style="width: 120px; height: 85px;"></a></center>
          </div>
        </div>
      </header>
        <div class="container-fluid py-4"><!-- Contenedor principal-->
            <div class="card shadow-lg o-hidden border-0 my-4">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="p-5">
                                <!--Título principal-->
                                <div class="text-center">
                                    <h2 class="text-dark mb-4">Iniciar Sesión</h2>
                                </div>
                                  <!-- Formulario para iniciar sesión -->
                                  <form id="login">
                                        <!--Correo electrónico/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control" type="email" id="inputEmail" name="email" placeholder="Correo electrónico" style="border-radius: 50px;"/>
                                        <label for="email">Correo electrónico</label>
                                      </div>

                                      <!--Contraseña/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control" type="password" id="cont" name="cont" placeholder="Contraseña" style="border-radius: 50px;"/>
                                        <label for="cont">Contraseña</label>
                                      </div>
                                      <br>
                                      <!--Botones para regresar o iniciar sesión-->
                                      <div class="form-group row">
                                          <!--Botón para iniciar sesión-->
                                          <div class="col-sm-6"><button class="btn btn-block text-white btn-user" style="background: #23B439; border-radius: 50px;"id="inicia" type="submit">Inicia sesión</button><hr></div>
                                          <!--Botón para regresar-->
                                          <div class="col-sm-6"><a href="index.html" class="btn btn-block text-white btn-user" role="button" style="background: #F80F0F; border-radius: 50px;">Regresar</a><hr></div>
                                      </div>
                                      <!--Enlace para acceder al registro en caso de no tener cuenta-->
                                      <div class="text-center">
                                        <a class="texto" href="register_user.php">¿No tienes una cuenta? Da click aquí.</a>
                                      </div>
                                    </form>
                                </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center text-lg-start text-white" style=background:#D34C42>
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
              © 2021 Copyright:
              <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
            </div>
        </footer>

        <!--Scripts-->
        <script src="assets/js/jquery.min.js"> </script>
        <script src="assets/js/jquery.validate.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type = "text/javascript">
          $(document).ready(function(){
            $("#login").validate({
                rules: {
                  email: {
                    required: true,
                    email: true
                  },
                  cont : {
                      required: true,
                      minlength: 8
                    },
                },
                messages : {

                  email: {
                    required: "Por favor, ingresa tu correo electrónico",
                    email: "El formato del correo electrónico debe de ser: abc@dominio.extension"
                  },
                  cont: {
                    required: "Por favor, ingresa tu contraseña y guardala muy bien",
                    minlength: "Al menos 8 letras o caracteres debe contener la contraseña"
                  }
                }
            });
          });
        </script>
    </body>
</html>
