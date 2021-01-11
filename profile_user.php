
<!--  SITIO - PEFIL DEL USUARIO (PROPIETARIO / DUEÑO DE LA CUENTA). Hola -->

<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Mi perfil</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" /> Fuente Raleway-->
      <!--Iconos - Estrellas-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/css/styles.css">
  </head>

  <header>
    <div class="py-2" style="background: #95140A;">
  <div class="container TEXTO">
    <h1 class="text-white text-right">EL JALE</h1>
  </div>
</div>

    <!--Barra de navegación-->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background: #E4AF4D;">
      <div class="container">
        <span><a href="empleos_usuarios.html"><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></a></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse texto" id="main_nav">
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

  <!-- CUERPO -->
  <body style="background: #E4AF4D;">
      <!---------------------------------------------------- PERFIL -------------------------------------------------------->
      <div class="container" style="background: #ffffff;">
          <div class="form-group">
            <br>

            <!--Título principal-->
            <div class="container p-2 mg-1 texto" style="background: #EAF2F8;">
              <br>
              <h3 class="text-dark" style="text-align: center;"><strong> Bienvenido a tu perfil </strong></h3>
            </div>
            <br>
            <div class="row mb-3">

              <!------------------------ Columna de lado izquiedo --------------------->
              <div class="col-lg-4">

                <!--Imagen - Foto de peril-->
                  <div class="card mb-3">
                    <div class="card-body text-center shadow">

                      <!--Título de la sección-->
                      <div class="card-header texto">
                        <h5 class="text-primary font-weight-bold" style="text-align: center;"> Tu foto </h5>
                      </div>

                      <!--Foto del usuario-->
                      <img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image3.jpeg" width="185" height="190">
                    </div>
                  </div>

                  <!--Sección de comentarios-->
                  <div class="card shadow mb-4">

                    <!--Título-->
                    <div class="card-header py-3 texto">
                      <h5 class="text-primary font-weight-bold m-0">Comentarios</h5>
                    </div>

                      <!--Contenedor de la sección-->
                      <div class="card-body" style="height:160px; overflow: scroll;">
                          <div class="container bg-light">

                            <!--Comentario 1-->
                            <div class="row mb-3 texto">

                              <!--Nombre de quién realiza el comentario-->
                                <h6>Nombre del Jefe 1.</h6>
                                <label class="text-muted ml-4"><small>Fecha de publicación</small></label>
                            </div>

                            <!--Calificación - Estrellas-->
                            <div class="row mb-3 texto">
                              <label for="estrellas">Estrellas: </label>

                              <!--Íconos de estrella-->
                              <span class="fa fa-star ml-3"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>

                            <!--Comentario-->
                            <div class="row texto">
                              <p class="pmediano" style="text-align: justify;" >Comentario 1.</p><br><p class="pchiquito" style="text-align: justify;" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                            </div>
                          </div>
                      </div>
                      <br>

                      <!-- Más comentarios- Modal -->
                      <div class="form-group">

                        <!--1. Botón para mostrar el modal-->
                        <div class="border border-light p-1 mb-2">
                          <div class="text-center texto">
                            <button class="btn btn-info mt-3" style="border-radius: 50px; width: 200px; height: 45px; text-align: center;" data-toggle="modal" data-target="#myModal">Más comentarios
                            </button>
                          </div>
                        </div>

                        <!--2. Creación de la ventana del modal -->
                        <div id="myModal" class="modal fade" role="dialog">

                            <!--3. Permite ver el contenido del modal -->
                            <div class="modal-dialog" style="height:450px; overflow: scroll">

                              <!--4. Aquí se coloca en condenido del modal-->
                              <div class="modal-content">

                                <!--5. Cabecera del modal-->
                                <div class="modal-header texto">
                                  <h4 class="modal-title">Comentarios.</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>

                                <!--6. Cuerpo del modal-->
                                <div class="modal-body">

                                  <!--Contenedor de la sección-->
                                  <div class="card-body">
                                    <div class="container">

                                      <!--Comentario 1-->
                                      <div class="row bg-light">
                                        <!--Nombre de quién realiza el comentario-->
                                          <div class="col-7 texto" style="text-align: left;">
                                              <h6><strong>Nombre del Jefe 1.</strong></h6>
                                              <label class="text-muted"><small>Fecha de publicación</small></label><br>
                                              <p style="text-align: justify;">Comentario 1. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                              </p>
                                          </div>
                                          <!--Calificación - Estrellas-->
                                          <div class="col-5 align-self-center text-center texto">
                                              <label>Estrellas</label><br>

                                              <!--Íconos de estrella-->
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                      <br>

                                      <!--Comentario 2-->
                                      <div class="row bg-light">
                                        <!--Nombre de quién realiza el comentario-->
                                          <div class="col-7 texto" style="text-align: left;">
                                              <h6><strong>Nombre del Jefe 2.</strong></h6>
                                              <label class="text-muted"><small>Fecha de publicación</small></label><br>
                                              <p style="text-align: justify;">Comentario 2. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                              </p>
                                          </div>
                                          <!--Calificación - Estrellas-->
                                          <div class="col-5 align-self-center text-center texto">
                                              <label>Estrellas</label><br>

                                              <!--Íconos de estrella-->
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                      <br>

                                      <!--Comentario 3-->
                                      <div class="row bg-light">
                                        <!--Nombre de quién realiza el comentario-->
                                          <div class="col-7 texto" style="text-align: left;">
                                              <h6><strong>Nombre del Jefe 3.</strong></h6>
                                              <label class="text-muted"><small>Fecha de publicación</small></label><br>
                                              <p style="text-align: justify;">Comentario 3. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                              </p>
                                          </div>
                                          <!--Calificación - Estrellas-->
                                          <div class="col-5 align-self-center text-center texto">
                                              <label>Estrellas</label><br>

                                              <!--Íconos de estrella-->
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                      <br>

                                      <!--Comentario 4-->
                                      <div class="row bg-light">
                                        <!--Nombre de quién realiza el comentario-->
                                          <div class="col-7 texto" style="text-align: left;">
                                              <h6><strong>Nombre del Jefe 4.</strong></h6>
                                              <label class="text-muted"><small>Fecha de publicación</small></label><br>
                                              <p style="text-align: justify;">Comentario 4. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                              </p>
                                          </div>
                                          <!--Calificación - Estrellas-->
                                          <div class="col-5 align-self-center text-center texto">
                                              <label>Estrellas</label><br>

                                              <!--Íconos de estrella-->
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                      <br>

                                      <!--Comentario 5-->
                                      <div class="row bg-light">
                                        <!--Nombre de quién realiza el comentario-->
                                          <div class="col-7 texto" style="text-align: left;">
                                              <h6><strong>Nombre del Jefe 5.</strong></h6>
                                              <label class="text-muted"><small>Fecha de publicación</small></label><br>
                                              <p style="text-align: justify;">Comentario 5. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                              </p>
                                          </div>
                                          <!--Calificación - Estrellas-->
                                          <div class="col-5 align-self-center text-center texto">
                                              <label>Estrellas</label><br>

                                              <!--Íconos de estrella-->
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <br>
              </div>

              <!------------------------ Columna de lado derecho --------------------->

                  <div class="col-lg-8">
                        <!--Definicion de las columnas para los espacios entre sección y sección-->
                        <div class="row mb-3 d-none">

                            <!--Espaciado-->
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>

                            <!--Espaciado-->
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Datos del usuario-->
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">

                                    <!--Título del apartado-->
                                    <div class="card-header py-3 texto">
                                      <h5 class="text-primary m-0 font-weight-bold" style="text-align: center;">Información general</h5>
                                    </div>

                                    <div class="card-body">

                                      <!--Formulario-->
                                      <form>

                                        <!--1ra Fila-->
                                        <div class="form-row">

                                          <!--Nombre-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label for=""><strong>Nombre</strong></label>
                                              <br>
                                              <label class="form-control-plaintext  labelchiquita" ide="puser" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Marina</label>
                                            </div>
                                          </div>

                                          <!--Apellido paterno-->

                                        </div>
                                          <div class="form-row">
                                            <div class="col">
                                              <div class="form-group texto">
                                                <label for=""><strong>Apellido paterno</strong></label>
                                                <br>
                                                <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Salas</label>
                                              </div>
                                            </div>

                                            <!--Apellido materno-->
                                            <div class="col">
                                              <div class="form-group texto">
                                                <label for=""><strong>Apellido Materno</strong></label>
                                                <br>
                                                <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">García</label>
                                              </div>
                                            </div>
                                        </div>


                                        <!--2da Fila-->
                                        <div class="form-row">

                                          <!--Correo-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label for=""><strong>Correo</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">ecr230799@gmail.com</label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--3ra Fila-->
                                        <div class="form-row">

                                          <!--Sexo-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label for=""><strong>Sexo</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Femenino</label>
                                            </div>
                                          </div>

                                          <!--Edad-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label for=""><strong>Edad</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">22</label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--4ta Fila-->
                                        <div class="form-row">

                                          <!--Área-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label for=""><strong>Área</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style=" border-bottom-color:#ada2a2;">Ciencias e ingeniería</label>
                                            </div>
                                          </div>

                                          <!--Especialidad-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label for=""><strong>Especialidad</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Ing. TIC´s</label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--5ta Fila-->
                                        <div class="form-row">

                                          <!--Descripción-->
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="texto" for=""><strong>Descripción</strong></label>
                                              <p class="des" style="text-align: justify;" type="text">
                                                Estudiante universitaría, conocimientos avanzados sobre bases de datos, redes y programación.
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <br>

                                        <!--Botón - Guardar cambios-->
                                        <div class="form-group">
                                          <div class="float-left texto">
                                            <button class="btn text-white" style="background: #EA0543; border-radius: 40px; width: 180px; height: 45px; text-align: center;" role="button" type="button"> <a href="profile_editable.html" class="text-white" style="text-decoration: none;">Editar perfil</a></button>
                                          </div>

                                          <!--Botón - Cerrar sesión-->
                                          <div class="float-right">
                                            <button class="btn texto" style="background: #E9501A; border-radius: 40px; width: 180px; height: 45px; text-align: center;"  type="submit"><a href="index.html" class="text-white" style="text-decoration: none;">Cerrar sesión</a></button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div> <!--FIN DE LA COLUMNA LADO DERECHO-->
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
  <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3 texto" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2021 Copyright:
        <a class="text-dark" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
      </div>
  </footer>
</html>
