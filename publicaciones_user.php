
<!--  SITIO - PUBLICACIONES. EL USUARIO PUEDE VISUALIZAR LAS PUBLICACIONES QUE HA REALIZADO. TAMBIÉN PODRÁ EDITAR DICHO EMPLEO O VISUALIZAR AQUELLOS USUARIOS INTERESADOS EN SU PUBLICACIÓN  -->
<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Mis publicaciones</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/styles.css">
  </head>

  <!-- CUERPO -->
  <body style="background: #E4AF4D;">

    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <header>
      <div class="bg-light py-2">
        <div class="container texto">
          <h1>EL JALE</h1>
        </div>
      </div>
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background: #E4AF4D;">
        <div class="container">
          <span><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main_nav">
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

      <!---------------------------------------------------- PUBLICACIONES -------------------------------------------------------->

      <div class="container" style="background: #ffffff;">
      <br>
            <!--Título principal-->
            <div class="container texto p-2 mg-1">
              <br>
              <h2 class="text-dark" style="text-align: center;"><strong> Tus publicaciones </strong></h2>
            </div>
            <br>

            <!--Fila 1- Inicio. Publicación 1-->
            <div class="container bg-light">
              <div class="row">

                <!--Columna de la foto-->
                <div class="col-md-6 col-lg-4 texto item align-self-center" >
                  <img class="img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo1.jpg">
                  <br>
                  <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;">Nombre del empleo</label>
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
                      </div>
                    </div>
                    <br>
                </div>

                <!--Columna del los botones-->
                <div class="col-md-6 col-lg-4 item align-self-center">

                  <!--Botón - Editar publicación-->
                  <div class="row">
                      <div class="col align-self-center">
                        <a href="edit_empleo.html" class="btn text-white" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;">Editar publicación</a>
                      </div>
                  </div>
                  <br><br>

                  <!--Botón - Interesados-->
                  <div class="row">
                      <div class="col align-self-center">
                        <a href="interesados.html" class="btn btn-info text-white" type="button" style="border-radius: 50px; width: 160px; height: 45px;">Interesados</a>
                      </div>
                  </div>
                </div>
              </div>
            </div> <!--Fila 1 - Fin. Publicación 2-->
            <br>

            <!--Fila 2 - Inicio. Publicación 2-->
            <div class="container bg-light">
              <div class="row">

                <!--Columna de la foto-->
                <div class="col-md-6 col-lg-4 texto item align-self-center" >
                  <img class="img-thumbnail mx-auto d-block" style="height: 180px; width: 290px;" src="assets/img/empleos/empleo3.jpg">
                  <br>
                  <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;">Nombre del empleo</label>
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
                      </div>
                    </div>
                    <br>
                </div>

                <!--Columna del los botones-->
                <div class="col-md-6 col-lg-4 item align-self-center">

                  <!--Botón - Editar publicación-->
                  <div class="row">
                      <div class="col align-self-center">
                        <a href="editar_empleo.html" class="btn text-white" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;">Editar publicación</a>
                      </div>
                  </div>
                  <br><br>
                  <!--Botón modal - Interesados-->
                  <div class="row">
                      <div class="col align-self-center">
                        <a href="interesados.html" class="btn btn-info text-white" type="button" style="border-radius: 50px; width: 160px; height: 45px;">Interesados</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Fila 2 - Fin. Publicación 2-->
            <br>

            <!--Fila 3 - Inicio. Publicación 3-->
            <!--Fila 3 - Fin. Publicación 3-->
      </div>
      <footer class="bg-light text-center text-lg-start">
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-dark" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
          </div>
    </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
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
  </body>
</html>
