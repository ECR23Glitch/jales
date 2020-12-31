
<!--  SITIO - LISTA DE INTERESADOS EN ALGUNA PUBLICACIÓN DEL USUARIO.  -->

<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Interesados</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <script>
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'navbar.html');
        xhr.setRequestHeader('Content-Type', 'text/plain');
        xhr.send();
        xhr.onload = function (data) {
            document.querySelector("header").innerHTML = data.currentTarget.response;
            //para más de una barra de navegación
            /*var navs = document.querySelectorAll("nav");
            for(var i=0; i<navs.length; i++) {
                navs[i].innerHTML = data.currentTarget.response;
            }*/

        };
    </script>
  </head>

  <!-- CUERPO -->
  <body  class="bg-secondary justify-content-center">

    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <header>
      <div class="bg-light py-2">
        <div class="container">
          <h1>JALATE A JALAR</h1>
        </div>
      </div>
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
          <a href="#" class="navbar-brand">LOS JALES - Logo</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main_nav">
            <!--Botones de navegación (Foro, buscar y generar trabajo)-->
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Buscar trabajo</a></li>
                <li class="nav-item"><a class="nav-link" href="register_empleo.html">Generar Trabajo</a></li>
                <li class="nav-item"><a class="nav-link" href="https://testjales.samuraistudio.com.mx/" target="_blank">Foro</a></li>
                <li class="nav-item"><a class="nav-link" href="publicaciones_user.php">Mis publicaciones</a></li>
                <li class="nav-item"><a class="nav-link" href="profile_user.html">Mi perfil</a></li>
              </ul>
          </div>
        </div>
      </nav>
    </header>
      <!---------------------------------------------------- INTERESADOS -------------------------------------------------------->

      <div class="container" style="background: #ffffff;">
            <!--Título principal-->
            <div class="container p-2 mg-1" >
              <br>
              <h2 class="text-dark" style="text-align: center;"><strong> Interesados </strong></h2>
            </div>
            <br>

            <!--Fila 1- Inicio. Usuario interesado-->
            <div class="container bg-light">
              <div class="row">

                <!--Columna de la foto-->
                <div class="col-md-6 col-lg-4 item align-self-center" >
                  <img class="rounded-circle img-thumbnail mx-auto d-block" style="height: 180px; width: 180px;" src="assets/img/1.jpg">
                  <br>
                  <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;">Nombre usuario</label>
                </div>

                <!--Columna con fila incluida-->
                <div class="col-md-6 col-lg-4 item align-self-center">

                    <!--Fila de área-->
                    <div class="row">
                      <div class="col">
                        <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Área: ING</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de especialidad-->
                    <div class="row">
                      <div class="col">
                        <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Especialidad: ING</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de estrellas-->
                    <div class="row">
                      <div class="col">
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
                        <button class="btn text-white" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;">Contratar</button>
                      </div>
                  </div>
                  <br><br>

                  <!--Botón - Interesados-->
                  <div class="row">
                      <div class="col align-self-center">
                        <a href="profile_vistas.html" type="button" class="btn btn-info" style="border-radius: 50px; width: 160px; height: 45px;">Visitar perfil</a>
                      </div>
                  </div>
                </div>
              </div>
            </div> <!--Fila 1 - Fin. Usuario interesado-->
            <br>

            <!--Fila 2 - Inicio. Usuario interesado-->
            <div class="container bg-light">
              <div class="row">

                <!--Columna de la foto-->
                <div class="col-md-6 col-lg-4 item align-self-center" >
                  <img class="rounded-circle img-thumbnail mx-auto d-block" style="height: 180px; width: 180px;" src="assets/img/2.jpg">
                  <br>
                  <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;">Nombre usuario</label>
                </div>

                <!--Columna con fila incluida-->
                <div class="col-md-6 col-lg-4 item align-self-center">

                    <!--Fila de área-->
                    <div class="row">
                      <div class="col">
                        <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Área: ING</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de especialidad-->
                    <div class="row">
                      <div class="col">
                        <label class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Especialidad: ING</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de estrellas-->
                    <div class="row">
                      <div class="col">
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
                        <button class="btn text-white" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;">Contratar</button>
                      </div>
                  </div>
                  <br><br>

                  <!--Botón - Interesados-->
                  <div class="row">
                      <div class="col align-self-center">
                        <a href="profile_vistas.html" type="button" class="btn btn-info" style="border-radius: 50px; width: 160px; height: 45px;">Visitar perfil</a>
                      </div>
                  </div>
                  </div>
                  </div>
                  </div>
              </div>

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
