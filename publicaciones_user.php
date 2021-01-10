
<!--  SITIO - PUBLICACIONES. EL USUARIO PUEDE VISUALIZAR LAS PUBLICACIONES QUE HA REALIZADO. TAMBIÉN PODRÁ EDITAR DICHO EMPLEO O VISUALIZAR AQUELLOS USUARIOS INTERESADOS EN SU PUBLICACIÓN  -->
<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Mis publicaciones</title>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" /> <!--Fuente Raleway-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!--Iconos - Estrellas-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/css/styles.css">
  </head>

  <!-- CUERPO -->
  <body style="background: #E4AF4D;">

    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <header>
      <div class="py-2" style="background: #95140A;">
        <div class="container">
          <h1 class="text-white text-right">EL JALE</h1>
        </div>
      </div>
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background: #E4AF4D;">
        <div class="container">
          <span><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse texto" id="main_nav">
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
            <br>
            <div class="row">

              <!--Columna de la foto-->
              <div class="col-md-6 col-lg-4 item align-self-center texto"><br>
                <img class="img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo1.jpg">
                <br>
                <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>
              </div>

              <!--Columna con fila incluida-->
              <div class="col-md-7 col-lg-5 item align-self-center">

                  <!--Fila del empleador-->
                  <div class="row texto">
                    <div class="col">
                      <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Nombre del empleador o empresa</label>
                    </div>
                  </div>
                  <br>

                  <!--Jornada y sueldo-->
                  <div class="row texto">
                    <div class="col">
                      <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Tipo de Jornada</label>
                    </div>
                    <div class="col">
                      <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Sueldo</label>
                    </div>
                  </div>
                  <br>

                  <!--Fila de área y especialidad-->
                  <div class="row texto">
                    <div class="col">
                      <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Área: ING</label>
                    </div>
                    <div class="col">
                      <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Especialidad: ING</label>
                    </div>
                  </div>
                  <br>

                  <!--Fila de descripcion-->
                  <div class="row texto">
                    <div class="col">
                      <textarea class="form-control" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify; height:100px;">Descripción del empleo</textarea>
                    </div>
                  </div>
                  <br>

                  <!--Fila de Requisitos-->
                  <div class="row texto">
                    <div class="col">
                      <textarea class="form-control" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify; height:100px;">Requisitos del personal</textarea>
                    </div>
                  </div>
              </div>

              <!--Columna del los botones-->
              <div class="col-md-6 col-lg-3 item align-self-center">
                <div class="row">

                    <div class="col align-self-center ">
                      <br><br>
                      <div class="col-sm-12 section1 text-center">
                        <button class="btn texto" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;"><a href="edit_empleo.html" class="text-white" style="text-decoration: none;">Editar publicación</a></button>
                      </div>
                    </div>
                    <div class="col align-self-center">
                      <br><br>
                      <div class="col-sm-12 section1 text-center">
                        <button class="btn btn-info texto" type="button" style="border-radius: 50px; width: 160px; height: 45px;"><a href="interesados.php" class="text-white" style="text-decoration: none;">Interesados</a></button>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          <br>
        </div><!--Fila 1 - Fin. Publicación 1-->
        <br>

        <!--Fila 2 - Inicio. Publicación 2-->
        <div class="container bg-light">
          <br>
          <div class="row">

            <!--Columna de la foto-->
            <div class="col-md-6 col-lg-4 item align-self-center texto"><br>
              <img class="img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo3.jpg">
              <br>
              <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>
            </div>

            <!--Columna con fila incluida-->
            <div class="col-md-7 col-lg-5 item align-self-center">

                <!--Fila del empleador-->
                <div class="row texto">
                  <div class="col">
                    <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Nombre del empleador o empresa</label>
                  </div>
                </div>
                <br>

                <!--Jornada y sueldo-->
                <div class="row texto">
                  <div class="col">
                    <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Tipo de Jornada</label>
                  </div>
                  <div class="col">
                    <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Sueldo</label>
                  </div>
                </div>
                <br>

                <!--Fila de área y especialidad-->
                <div class="row texto">
                  <div class="col">
                    <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Área: ING</label>
                  </div>
                  <div class="col">
                    <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Especialidad: ING</label>
                  </div>
                </div>
                <br>

                <!--Fila de descripcion-->
                <div class="row texto">
                  <div class="col">
                    <textarea class="form-control" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify; height:100px;">Descripción del empleo</textarea>
                  </div>
                </div>
                <br>

                <!--Fila de Requisitos-->
                <div class="row texto">
                  <div class="col">
                    <textarea class="form-control" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify; height:100px;">Requisitos del personal</textarea>
                  </div>
                </div>
            </div>

            <!--Columna del los botones-->
            <div class="col-md-6 col-lg-3 item align-self-center">
              <div class="row texto">

                  <div class="col align-self-center ">
                    <br><br>
                    <div class="col-sm-12 section1 text-center">
                      <button class="btn texto" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;"><a href="edit_empleo.html" class="text-white" style="text-decoration: none;">Editar publicación</a></button>
                    </div>
                  </div>
                  <div class="col align-self-center">
                    <br><br>
                    <div class="col-sm-12 section1 text-center">
                      <button class="btn btn-info texto" type="button" style="border-radius: 50px; width: 160px; height: 45px;"><a href="interesados.php" class="text-white" style="text-decoration: none;">Interesados</a></button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        <br>
        </div><!--Fila 2 - Fin. Publicación 2-->
      </div>
      <br>
      <footer class="bg-light text-center text-lg-start">
          <!-- Copyright -->
          <div class="text-center p-3 texto" style="background-color: rgba(0, 0, 0, 0.2)">
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
