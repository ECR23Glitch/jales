<?php

 ?>
<html>

  <!-- ENCABEZADO -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
    <title>Mi perfil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <!--Iconos - Estrellas + puerta-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>

  <header>
    <div class="py-2" style="background: #FFFFFF;">
      <div class="container">
        <center><a href="empleos_usuarios.php"><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></a></center>
      </div>
    </div>

    <!--Barra de navegación-->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background: #000000;">
      <div class="container">
        <span><a href="empleos_usuarios.php"><img src="assets/img/Titulo/jale_b_sp_1.png" class="img-fluid" style="width: 150px; height: 65px;"></a></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse texto" id="main_nav">
          <ul class="navbar-nav ml-auto">

            <!--Buscador   -->
            <li class="nav-item">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Busca un empleo" aria-label="Search"  style= "border-radius: 50px;">
                <button class="btn text-white btn-lg my-2 my-sm-0" type="submit" style="background: #95140A;  border-radius: 50px;">Buscar</button>
              </form>
            </li>

            <!-- Espaciado -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item"><a class="nav-link" href="empleos_usuarios.php">Buscar trabajo</a></li>
            <li class="nav-item"><a class="nav-link" href="register_empleo.php">Generar Trabajo</a></li>
            <li class="nav-item"><a class="nav-link" href="https://testjales.samuraistudio.com.mx/" target="_blank">Foro</a></li>
            <li class="nav-item"><a class="nav-link" href="publicaciones_user.php">Mis publicaciones</a></li>
            <li class="nav-item"><a class="nav-link" href="profile_user.php">Mi perfil</a></li>
            <li class="nav-item"><a class="nav-link" href="empleos_publico.php"><span class="fas fa-door-open" style="font-size: 20px;"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- CUERPO -->
  <body style="background: #E6E1E1;"><br>

    <!---------------------------------------------------- PERFIL -------------------------------------------------------->
    <div class="container" style="background: #ffffff;">
      <div class="form-group"><br>

        <!--Título principal-->
        <div class="container p-2 mg-1 texto" style="background: #F0F0F0;"><br>
          <h3 class="text-dark" style="text-align: center;"><strong> Bienvenido a tu perfil </strong></h3>
        </div><br>

        <div class="row mb-3">

          <!------------------------ Columna de lado izquiedo --------------------->
          <div class="col-lg-4">

            <!--Imagen - Foto de peril-->
            <div class="card mb-3">
              <div class="card-body text-center shadow">

                <!--Título de la sección-->
                <div class="card-header texto">
                  <h5 class="text font-weight-bold" style="text-align: center;"> Tu foto </h5>
                </div>

                <!--Foto del usuario-->
                <img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image3.jpeg" width="185" height="190">
              </div>
            </div>

            <!--Sección de comentarios-->
            <div class="card shadow mb-4">

              <!--Título-->
              <div class="card-header py-3 texto">
                <h5 class="text font-weight-bold m-0">Comentarios</h5>
              </div>

              <!--Contenedor de la sección-->
              <div class="card-body" style="height:333px; overflow: scroll;">
                <div class="container bg-light">

                  <!--Comentario 1-->
                  <div class="row mb-3 py-2 ml-2 texto">
                    <h6>Nombre del Jefe 1.</h6> <!--Nombre de quién realiza el comentario-->
                    <label class="text-muted"><small>Fecha de publicación</small></label>
                  </div>

                  <!--Calificación - Estrellas-->
                  <div class="row mb-3 ml-2 texto">
                    <label for="estrellas">Estrellas: </label>

                    <!--Íconos de estrella-->
                    <span class="fa fa-star ml-3"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>

                  <!--Comentario-->
                  <div class="row texto ml-2 mr-1">
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
                    <button class="btn btn-info mt-3" style="border-radius: 50px; width: 200px; height: 45px; text-align: center;" data-toggle="modal" data-target="#myModal">Ver comentarios</button>
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
                        <h4 class="modal-title"><strong>Comentarios.</strong></h4>
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
                                <div class="col texto" style="text-align: left;">
                                  <h6 class="py-2"><strong>Nombre del Jefe 1.</strong></h6>
                                  <label class="text-muted py-1"><small>Fecha de publicación</small></label><br>
                                  <label>Estrellas</label>&nbsp;

                                  <!--Íconos de estrella-->
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <br><br>
                                  <p class="pchiquito" style="text-align: justify;">Comentario 1. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                </div>
                              </div>
                              <br>

                              <!--Comentario 2-->
                              <div class="row bg-light">
                                <!--Nombre de quién realiza el comentario-->
                                <div class="col texto" style="text-align: left;">
                                  <h6 class="py-2"><strong>Nombre del Jefe 2.</strong></h6>
                                  <label class="text-muted py-1"><small>Fecha de publicación</small></label><br>
                                  <label>Estrellas</label>&nbsp;

                                  <!--Íconos de estrella-->
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <br><br>
                                  <p class="pchiquito" style="text-align: justify;">Comentario 2. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                </div>
                              </div>
                              <br>

                              <!--Comentario 3-->
                              <div class="row bg-light">
                                <!--Nombre de quién realiza el comentario-->
                                <div class="col texto" style="text-align: left;">
                                  <h6 class="py-2"><strong>Nombre del Jefe 3.</strong></h6>
                                  <label class="text-muted py-1"><small>Fecha de publicación</small></label><br>
                                  <label>Estrellas</label>&nbsp;

                                  <!--Íconos de estrella-->
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <br><br>
                                  <p class="pchiquito" style="text-align: justify;">Comentario 3. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                </div>
                              </div>
                              <br>

                              <!--Comentario 4-->
                              <div class="row bg-light">
                                <!--Nombre de quién realiza el comentario-->
                                <div class="col texto" style="text-align: left;">
                                  <h6 class="py-2"><strong>Nombre del Jefe 4.</strong></h6>
                                  <label class="text-muted py-1"><small>Fecha de publicación</small></label><br>
                                  <label>Estrellas</label>&nbsp;

                                  <!--Íconos de estrella-->
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <br><br>
                                  <p class="pchiquito" style="text-align: justify;">Comentario 4. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                </div>
                              </div>
                              <br>

                              <!--Comentario 5-->
                              <div class="row bg-light">
                                <!--Nombre de quién realiza el comentario-->
                                <div class="col texto" style="text-align: left;">
                                  <h6 class="py-2"><strong>Nombre del Jefe 5.</strong></h6>
                                  <label class="text-muted py-1"><small>Fecha de publicación</small></label><br>
                                  <label>Estrellas</label>&nbsp;

                                  <!--Íconos de estrella-->
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <br><br>
                                  <p class="pchiquito" style="text-align: justify;">Comentario 5. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
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
                                      <h5 class="text m-0 font-weight-bold" style="text-align: center;">Información general</h5>
                                    </div>

                                    <div class="card-body">

                                      <!--Formulario-->
                                      <form>

                                        <!--1ra Fila-->
                                        <div class="form-row pb-3">

                                          <!--Nickname-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Nickname</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" id="n_name" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Marina_12</label>
                                            </div>
                                          </div>

                                          <!--Nombre-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Nombre</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" id="puser" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Marina</label>
                                            </div>
                                          </div>
                                        </div>


                                        <!--Apellidos-->
                                        <div class="form-row pb-3">

                                            <!--Apellido materno-->
                                            <div class="col-xs-12 col-md-6">
                                              <div class="form-group texto">
                                                <label for=""><strong>Apellido paterno</strong></label>
                                                <br>
                                                <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Salas</label>
                                              </div>
                                            </div>

                                            <!--Apellido materno-->
                                            <div class="col-xs-12 col-md-6">
                                              <div class="form-group texto">
                                                <label for=""><strong>Apellido Materno</strong></label>
                                                <br>
                                                <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">García</label>
                                              </div>
                                            </div>
                                        </div>


                                        <!--2da Fila-->
                                        <div class="form-row pb-3">

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
                                        <div class="form-row pb-3">

                                          <!--Sexo-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Sexo</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Femenino</label>
                                            </div>
                                          </div>

                                          <!--Fecha de nacimiento-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Fecha de nacimiento</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">22</label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--4ta Fila-->
                                        <div class="form-row pb-3">

                                          <!--Área-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Área</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style=" border-bottom-color:#ada2a2;">Ciencias e ingeniería</label>
                                            </div>
                                          </div>

                                          <!--Especialidad-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Especialidad</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">Ing. TIC´s</label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--5ta Fila-->

                                        <div class="form-row pb-3">
                                          <!--Estado-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Estado</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" id="estado" value="" readonly style=" border-bottom-color:#ada2a2;">Puebla</label>
                                            </div>
                                          </div>

                                          <!--Ciudad-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Ciudad</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" id="ciudad" value="" readonly style="border-bottom-color:#ada2a2;">Puebla de Zaragoza</label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--6ta Fila-->
                                        <div class="form-row">

                                          <!--Redes sociales-->
                                          <div class="col">
                                            <center>
                                             <div class="form-group texto">
                                               <label class="form-control-plaintext labelchiquita" type="text" id="facebook" value="" readonly style="border-bottom-color:#ada2a2;">
                                               <a style="color: black;" href="https://www.facebook.com/"><span class="fab fa-facebook-square" style="font-size: 30px;">&nbsp;&nbsp;</span><u>Da click para contactar por facebook</u></a></label>
                                               <br>
                                             </div>
                                            </center>
                                          </div>
                                        </div>

                                        <!--7ma Fila-->
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
                                        <div class="form-row">
                                          <div class="col texto section1 text-center py-2">
                                            <button class="btn text-white" id="editarPerfil" style="background: #23B439; border-radius: 40px; width: 180px; height: 45px; text-align: center;" role="button" type="button"> <a href="profile_editable.html" class="text-white" style="text-decoration: none;">Editar perfil</a></button>
                                          </div>

                                          <!--Botón - Cerrar sesión-->
                                          <div class="col texto section1 text-center py-2">
                                            <button class="btn text-white" id="cerrarSesion" style="background: #E9501A; border-radius: 40px; width: 180px; height: 45px; text-align: center;"  type="submit">Cerrar sesión</button>
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

      <!--Nos redirecciona a la página = Botón Cerrar sesión-->
      <script type="text/javascript">
        $(document).ready(function(){
          $("#cerrarSesion").click(function(){
            event.preventDefault();
          $(location).attr('href', 'empleos_publico.php');
          });
        });
      </script>

      <!--Nos redirecciona a la página = Botón Edita perfil-->
      <script type="text/javascript">
        $(document).ready(function(){
          $("#editarPerfil").click(function(){
            event.preventDefault();
          $(location).attr('href', 'profile_editable.php');
          });
        });
      </script>

  </body>
  <footer class="text-center text-lg-start text-white" style="background: #000000;">
      <!-- Copyright -->
      <div class="text-center p-3 texto" >
        © 2021 Copyright:
        <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
      </div>
  </footer>
</html>
