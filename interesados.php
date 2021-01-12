
<!--  SITIO - LISTA DE INTERESADOS EN ALGUNA PUBLICACIÓN DEL USUARIO.  -->

<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Interesados</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!--Iconos - Estrellas-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/css/styles.css">
  </head>

  <!-- CUERPO -->
  <body  class="justify-content-center" style="background: #E4AF4D;">

    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <header>
      <div class="py-2" style="background: #95140A;">
        <div class="container">
          <center><a href="empleos_usuarios.html"><img src="assets/img/Logo/color.png" class="img-fluid" style="width: 120px; height: 85px;"></a></center>
      </div>
  </div>
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background: #E4AF4D;">
        <div class="container">
          <span><a href="empleos_usuarios.html"><img src="assets/img/Titulo/jale_b_sp_1.png" class="img-fluid mr-3" style="width: 150px; height: 65px;"></a></span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" texto collapse navbar-collapse" id="main_nav">
            <!--Botones de navegación (Foro, buscar y generar trabajo)-->
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="empleos_usuarios.html">Buscar trabajo</a></li>
                <li class="nav-item"><a class="nav-link" href="register_empleo.html">Generar Trabajo</a></li>
                <li class="nav-item"><a class="nav-link" href="https://testjales.samuraistudio.com.mx/" target="_blank">Foro</a></li>
                <li class="nav-item"><a class="nav-link" href="publicaciones_user.php">Mis publicaciones</a></li>
                <li class="nav-item"><a class="nav-link" href="profile_user.php">Mi perfil</a></li>
              </ul>
          </div>
        </div>
      </nav>
    </header>
      <!---------------------------------------------------- INTERESADOS -------------------------------------------------------->

      <div class="container" style="background: #ffffff;">
            <!--Título principal-->
            <div class="container texto p-2 mg-1" >
              <br>
              <h2 class="text-dark" style="text-align: center;"><strong> Interesados </strong></h2>
            </div>
            <br>

            <!--Fila 1- Inicio. Usuario interesado-->
            <div class="container bg-light">
              <div class="row py-3">

                <!--Columna de la foto-->
                <div class="col-md-6 col-lg-4 texto item align-self-center" >
                  <img class="rounded-circle img-thumbnail mx-auto d-block" style="height: 180px; width: 180px;" src="assets/img/1.jpg">
                  <br>
                  <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;">Nombre usuario</label>
                </div>

                <!--Columna con fila incluida-->
                <div class="col-md-6 col-lg-4 item align-self-center">

                    <!--Fila de área-->
                    <div class="row">
                      <div class="col texto">
                        <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Área: ING</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de especialidad-->
                    <div class="row">
                      <div class="col texto">
                        <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Especialidad: ING</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de estrellas-->
                    <div class="row">
                      <div class="col texto">
                        <label class="form-control-plaintext" style="text-align: justify;">Estrellas</label>
                        <!--Íconos de estrella-->
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                    </div>
                </div>

                <!--Columna del los botones-->
                <div class="col-md-6 col-lg-4 item align-self-center">

                  <!--Botón - Editar publicación-->
                  <div class="row">
                      <div class="col section1 text-center texto">
                        <button class="btn text-white" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;">Contactar <ion-icon name="logo-whatsapp" size="small"></ion-icon></button>
                      </div>
                  </div>
                  <br><br>

                  <!--Botón - Interesados-->
                  <div class="row">
                      <div class="col texto section1 text-center">
                        <button class="btn btn-info" id="visitar" style="border-radius: 50px; width: 160px; height: 45px; text-align:center;">Visitar perfil&nbsp;<ion-icon name="enter" size="small"></ion-icon></button>
                      </div>
                  </div>
                </div>
              </div>
            </div> <!--Fila 1 - Fin. Usuario interesado-->
            <br>

            <!--Fila 2 - Inicio. Usuario interesado-->
            <div class="container bg-light">
              <div class="row py-3">

                <!--Columna de la foto-->
                <div class="col-md-6 col-lg-4 texto item align-self-center" >
                  <img class="rounded-circle img-thumbnail mx-auto d-block" style="height: 180px; width: 180px;" src="assets/img/2.jpg">
                  <br>
                  <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;">Nombre usuario</label>
                </div>

                <!--Columna con fila incluida-->
                <div class="col-md-6 col-lg-4 item align-self-center">

                    <!--Fila de área-->
                    <div class="row">
                      <div class="col texto">
                        <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Área: ING</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de especialidad-->
                    <div class="row">
                      <div class="col texto">
                        <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Especialidad: ING</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de estrellas-->
                    <div class="row">
                      <div class="col texto">
                        <label class="form-control-plaintext" style="text-align: justify;">Estrellas</label>
                        <!--Íconos de estrella-->
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                    </div>
                </div>

                <!--Columna del los botones-->
                <div class="col-md-6 col-lg-4 item align-self-center">

                  <!--Botón - Editar publicación-->
                  <div class="row">
                      <div class="col section1 text-center texto">
                        <button class="btn text-white" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;">Contactar <ion-icon name="logo-whatsapp" size="small"></ion-icon></button>
                      </div>
                  </div>
                  <br><br>

                  <!--Botón - Interesados-->
                  <div class="row">
                      <div class="col section1 texto text-center">
                        <button class="btn btn-info" id="visitar" style="border-radius: 50px; width: 160px; height: 45px; text-align:center;">Visitar perfil&nbsp;<ion-icon name="enter" size="small"></ion-icon></button>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <br>

          <!--Fila 3 - Inicio. Usuario interesado-->
          <div class="container bg-light">
            <div class="row py-3">

              <!--Columna de la foto-->
              <div class="col-md-6 col-lg-4 texto item align-self-center" >
                <img class="rounded-circle img-thumbnail mx-auto d-block" style="height: 180px; width: 180px;" src="assets/img/3.jpg">
                <br>
                <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;">Nombre usuario</label>
              </div>

              <!--Columna con fila incluida-->
              <div class="col-md-6 col-lg-4 item align-self-center">

                  <!--Fila de área-->
                  <div class="row">
                    <div class="col texto">
                      <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Área: ING</label>
                    </div>
                  </div>
                  <br>

                  <!--Fila de especialidad-->
                  <div class="row">
                    <div class="col texto">
                      <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Especialidad: ING</label>
                    </div>
                  </div>
                  <br>

                  <!--Fila de estrellas-->
                  <div class="row">
                    <div class="col texto">
                      <label class="form-control-plaintext" style="text-align: justify;">Estrellas</label>
                      <!--Íconos de estrella-->
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
              </div>


              <!--Columna del los botones-->
              <div class="col-md-6 col-lg-4 item align-self-center">

                <!--Botón - Editar publicación-->
                <div class="row">
                    <div class="col section1 text-center texto">
                      <button class="btn text-white" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;">Contactar <ion-icon name="logo-whatsapp" size="small"></ion-icon></button>
                    </div>
                </div>
                <br><br>

                <!--Botón - Interesados-->
                <div class="row">
                    <div class="col texto section1 text-center">
                      <button class="btn btn-info" id="visitar" style="border-radius: 50px; width: 160px; height: 45px; text-align:center;">Visitar perfil&nbsp;<ion-icon name="enter" size="small"></ion-icon></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <br>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
      <script  src = "https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"> </script>
      <script type="text/javascript">
        if ($(window).width() > 992) {
          $(window).scroll(function(){
            if ($(this).scrollTop() > 40) {
              $('#navbar_top').addClass("fixed-top");
              $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            }else{
              $('#navbar_top').removeClass("fixed-top");
              $('body').css('padding-top', '0');
            }
          });
        } // end if
      </script>

      <!--Nos redirecciona a la página = Botón Regresar-->
      <script type="text/javascript">
        $(document).ready(function(){
          $("#visitar").click(function(){
            event.preventDefault();
          $(location).attr('href', 'profile_vistas.php');
          });
        });
      </script>

  </body>
  <br>
  <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2021 Copyright:
        <a class="text-dark" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
      </div>
  </footer>
</html>
