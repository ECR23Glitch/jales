<!--  SITIO - PERFIL EDITABLE DEL PROPIETARIO / DUEÑO DE LA CUENTA (PUEDE MODIFICAR SU INFORMACIÓN).  -->

<!DOCTYPE html>
<html>

  <!--  ENCABEZADO  -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Editar perfil</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!--Iconos - Estrellas-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="stylesheet" href="assets/css/toastr.min.css">
  </head>

  <!-- CUERPO -->
  <body style="background: #E4AF4D;">

    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <header>
      <div class="py-2" style="background: #95140A;;">
        <div class="container">
          <center><a href="empleos_usuarios.php"><img src="assets/img/Logo/color.png" class="img-fluid" style="width: 120px; height: 85px;"></a></center>
        </div>
      </div>
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background: #E4AF4D;">
        <div class="container">
          <span><a href="empleos_usuarios.php"><img src="assets/img/Titulo/jale_b_sp_1.png" class="img-fluid mr-3" style="width: 150px; height: 65px;"></a></span>
          <br>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse texto" id="main_nav">
            <!--Botones de navegación (Foro, buscar y generar trabajo)-->
              <ul class="navbar-nav ml-auto">

                <!--Buscador-->
                <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Busca un empleo" aria-label="Search"  style= "border-radius: 50px;">
                      <button class="btn text-white btn-lg my-2 my-sm-0" type="submit" style="background: #95140A;  border-radius: 50px;">Buscar</button>
                  </form>
                </li>

                <!-- Espaciado -->
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <li class="nav-item"><a class="nav-link" href="empleos_usuarios.php">Buscar trabajo</a></li>
                <li class="nav-item"><a class="nav-link" href="register_empleo.php">Generar Trabajo</a></li>
                <li class="nav-item"><a class="nav-link" href="https://testjales.samuraistudio.com.mx/" target="_blank">Foro</a></li>
                <li class="nav-item"><a class="nav-link" href="publicaciones_user.php">Mis publicaciones</a></li>
                <li class="nav-item"><a class="nav-link" href="profile_user.php">Mi perfil</a></li>
              </ul>
          </div>
        </div>
      </nav>
    </header>

      <!---------------------------------------------------- PERFIL -------------------------------------------------------->

      <div class="container" style="background: #ffffff;">
          <div class="form-group">
            <br>

            <!--Título principal-->
            <div class="container texto p-2 mg-1 texto" style="background: #EAF2F8;">
              <br>
              <h3 class="text-dark" style="text-align: center;"><strong> Editar perfil </strong></h3>
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
                        <h5 class="font-weight-bold" style="text-align: center;"> Tu foto </h5>
                      </div>

                      <!--Foto del usuario-->
                      <img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image3.jpeg" width="185" height="190">

                      <!--Botón para cambiar la foto del usuario-->
                      <div class="mb-3 texto">
                        <button class="btn btn-sm text-white" style="background: #E9501A; border-radius: 45px; width: 160px; height: 40px; text-align: center;"  type="button">Cambiar foto</button>
                      </div>
                    </div>
                  </div>

                  <!--Sección de comentarios-->
                  <div class="card shadow mb-4">

                    <!--Título-->
                    <div class="card-header py-3 texto">
                      <h5 class="font-weight-bold m-0">Comentarios </h5>
                    </div>

                      <!--Contenedor de la sección-->
                      <div class="card-body" style="height:150px; overflow: scroll;">
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
                            <button class="btn btn-info mt-3" style="border-radius: 50px; width: 200px; height: 45px; text-align: center;" data-toggle="modal" data-target="#myModal">Ver comentarios</button>
                          </div>
                        </div>

                        <!--2. Creación de la ventana del modal -->
                        <div id="myModal" class="modal fade" role="dialog">

                            <!--3. Permite ver el contenido del modal -->
                            <div class="modal-dialog" style="width:510px; height:450px; overflow: scroll">

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
                                              <p class="pchiquito" style="text-align: justify;">Comentario 1. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
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
                                              <p class="pchiquito" style="text-align: justify;">Comentario 2. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
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
                                              <p class="pchiquito" style="text-align: justify;">Comentario 3. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
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
                                              <p class="pchiquito" style="text-align: justify;">Comentario 4. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
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
                                              <p class="pchiquito" style="text-align: justify;">Comentario 5. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
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
                                      <h5 class="m-0 font-weight-bold" style="text-align: center;">Información general</h5>
                                    </div>

                                    <div class="card-body">

                                      <!--Formulario-->
                                      <form id="profile_edit">

                                        <!--Fila 1 - Nickname y nombre-->
                                        <div class="form-row pb-3">

                                          <!--Nickname-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label class="ml-2" for=""><strong>Nickname</strong></label>
                                              <input class="form-control subtitulo" id="n_name" type="text" placeholder="Mar" name="n_name" style="border-radius: 18px;"/>
                                            </div>
                                          </div>

                                          <!--Nombre-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label class="ml-2" for=""><strong>Nombre</strong></label>
                                              <input class="form-control subtitulo" id="nombre" type="text" placeholder="Marina" name="nombre" style="border-radius: 18px;"/>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Fila 2 - Apellidos-->
                                        <div class="form-row pb-3">

                                            <!--Apellido paterno-->
                                            <div class="col-xs-12 col-md-6">
                                              <div class="form-group texto">
                                                <label class="ml-2" for=""><strong>Apellido paterno</strong></label>
                                                <input class="form-control subtitulo" id="a_paterno" type="text" placeholder="Salas" name="a_paterno" style="border-radius: 18px;"/>
                                              </div>
                                            </div>

                                            <!--Apellido materno-->
                                            <div class="col-xs-12 col-md-6">
                                              <div class="form-group texto">
                                                <label class="ml-2" for=""><strong>Apellido Materno</strong></label>
                                                <input class="form-control subtitulo" id="a_materno" type="text" name="a_materno" placeholder="García"  style="border-radius: 18px;"/>
                                              </div>
                                            </div>
                                        </div>

                                        <!--Fila 3 - Sexo y edad-->
                                        <div class="form-row pb-3">

                                          <!--Sexo-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label class="ml-2" for=""><strong>Sexo</strong></label>
                                              <select class="form-control" style="border-radius: 18px;">
                                                <optgroup class="subtitulo" label="Sexo">
                                                    <!--Nombre de la área-->
                                                    <option class="subtitulo"value="12" selected="">Femenino</option>
                                                    <option class="subtitulo" value="13">Masculino</option>
                                                    <option class="subtitulo" value="14">Otro</option>
                                                </optgroup>
                                              </select>
                                            </div>
                                          </div>

                                          <!--Edad-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label class="ml-2" for=""><strong>Edad</strong></label>
                                              <input id="fecha" name="fecha" class="form-control subtitulo" type="date" placeholder=""  style="border-radius: 18px;"/>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Fila 4 - Área y especialidad-->
                                        <div class="form-row pb-3">

                                          <!--Área-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label class="ml-2" for=""><strong>Área</strong></label>
                                              <select class="form-control" style="border-radius: 18px;">
                                                <optgroup class="subtitulo" label="Área">
                                                    <!--Nombre del área del usuario-->
                                                    <option class="subtitulo" value="1" selected="">Administración y traducción</option>
                                                    <option class="subtitulo" value="2">Diseño y áreas creativas</option>
                                                    <option class="subtitulo" value="3">IT</option>
                                                </optgroup>
                                              </select>
                                            </div>
                                          </div>

                                          <!--Especialidad-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label class="ml-2" for=""><strong>Especialidad</strong></label>
                                              <input class="form-control subtitulo" id="empEspecialidad" name="empEspecialidad" type="text" placeholder="Ing. TIC´s"  style="border-radius: 18px;"/>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Fila 5 - Estado y Ciudad-->
                                        <div class="form-row pb-3">

                                            <!--Estado-->
                                            <div class="col-xs-12 col-md-6">
                                              <div class="form-group texto">
                                                <label class="ml-2" for=""><strong>Estado</strong></label>
                                                <input class="form-control subtitulo" id="estado" name="estado" type="text" placeholder="Puebla"  style="border-radius: 18px;"/>
                                              </div>
                                            </div>

                                            <!--Ciudad-->
                                            <div class="col-xs-12 col-md-6">
                                              <div class="form-group texto">
                                                <label class="ml-2" for=""><strong>Ciudad</strong></label>
                                                <input class="form-control subtitulo" id="ciudad" name="ciudad" type="text" placeholder="Puebla de Zaragoza"  style="border-radius: 18px;"/>
                                              </div>
                                            </div>
                                        </div>

                                        <!--Fila 6 - URL de facebook-->
                                        <div class="form-row pb-3">

                                          <!--Facebook-->
                                          <div class="col">
                                           <div class="form-group texto">
                                             <input class="form-control subtitulo" type="text" id="facebook" placeholder="Da click para contactar por facebook" style="border-radius: 18px;"><span class="fab fa-facebook-square" style="font-size: 30px;">&nbsp;&nbsp;</span></input>
                                             <br>
                                           </div>
                                         </div>
                                        </div>

                                        <!--Fila 7 - Descripción-->
                                        <div class="form-row pb-3">

                                          <!--Descripción-->
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="ml-2 texto" for=""><strong>Descripción</strong></label>
                                              <textarea class="form-control labelchiquita" id="descripcion" name="descripcion"  type="text" placeholder="Estudiante universitaría, conocimientos avanzados sobre bases de datos, redes y programación."  style="border-radius: 18px; height: 150px;"></textarea>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Botón  Guardar cambios-->
                                        <div class="form-row">
                                          <div class="col section1 text-center py-2 texto">
                                            <button class="btn btn-success text-white btn-user" id="guardar" type="submit" role="button" style="border-radius: 50px; width: 180px; height: 45px; text-align: center;">Guardar cambios</button>
                                          </div>

                                          <!--Botón  Regresar -->
                                          <div class="col section1 text-center py-2 texto">
                                            <button class="btn text-white btn-user" id="salir" role="button" style="background: #206BAA; border-radius: 40px; width: 180px; height: 45px; text-align: center;" type="button">Regresar</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
       </div>

       <footer class="text-center text-lg-start text-white"  style="background: #D34C42;">
           <!-- Copyright -->
           <div class="text-center p-3 texto">
             © 2021 Copyright:
             <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
           </div>
       </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
              <script src="assets/js/jquery.validate.js"></script>
                <script src="assets/js/toastr.min.js"></script>
      <script type="text/javascript">
          if ($(window).width() > 992) {
            $(window).scroll(function(){
              if ($(this).scrollTop() > 40) {
                $('#navbar_top').addClass("fixed-top");
                // add padding top to show content behind navbar
                $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
              }else{
                $('#navbar_top').removeClass("fixed-top");
                // remove padding top from body
                $('body').css('padding-top', '0');
              }
            });
          } // end if
        </script>

        <!--Nos redirecciona a la página = Botón Guardar cambios-->

        <!--Nos redirecciona a la página = Botón Regresar-->
        <!-- Aca cambiaran los divs -->
        <script type="text/javascript">
          $(document).ready(function(){
            //Next hacia c2
            $("#guardar").click(function(){
              event.preventDefault();
              if( ($('#n_name').val() == '') || ($('#nombre').val() == '') || ($('#a_paterno').val() == '') || ($('#a_materno').val() == '') ||
                  ($('#empEspecialidad').val() == '') || ($('#estado').val() == '') || ($('#ciudad').val() == '') || ($('#descripcion').val() == '') ) {
                toastr["warning"]("No puede haber campos vacíos, llenalos para continuar")

                  toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }
              }else{
                event.preventDefault();
                $(location).attr('href', 'profile_user.php');
              }
            });
          });
        </script>
        <script src="assets/js/register-user.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){
            $("#salir").click(function(){
              event.preventDefault();
              $(location).attr('href', 'profile_user.php');
            });
          });
        </script>


        <script type = "text/javascript">
          $(document).ready(function(){

            $("#profile_edit").validate({
                rules: {
                  n_name: {
                    required: true,
                    minlength: 3,
                  },
                  nombre: {
                    required: true,
                    minlength: 3
                  },
                  a_paterno : {
                      required: true,
                      minlength: 3
                    },
                  a_materno : {
                      required: true,
                      minlength: 3
                      },
                  fecha : {
                      required: true
                     },
                  empEspecialidad : {
                      required: true,
                      minlength: 4
                    },
                  estado : {
                        required: true,
                        minlength: 4
                      },
                  ciudad : {
                          required: true,
                          minlength: 4
                        },
                  descripcion : {
                     required: true,
                     minlength: 20
                      }
                },
                messages : {

                  n_name: {
                    required: "Por favor, ingresa un nickname.",
                    minlength: "Al menos 3 letras debe contener el nickname."
                  },

                  nombre: {
                    required: "Por favor, ingresa tu nombre.",
                    minlength: "Al menos 3 letras debe contener el nombre."
                  },
                  a_paterno: {
                    required: "Por favor, ingresa tu apellido paterno.",
                    minlength: "Al menos 3 letras debe contener el apellido paterno."
                  },
                  a_materno: {
                    required: "Por favor, ingresa tu apellido materno.",
                    minlength: "Al menos 3 letras debe contener el apellido materno."
                  },
                  fecha: {
                    required: "Por favor, ingresa tu fecha de nacimiento."
                  },
                  empEspecialidad: {
                    required: "Por favor, ingresa tu especialidad.",
                    minlength: "Al menos 4 letras debe contener tu especialidad."
                  },
                  estado: {
                    required: "Por favor, ingresa tu especialidad.",
                    minlength: "Al menos 4 letras debe contener tu Estado."
                  },
                  ciudad: {
                    required: "Por favor, ingresa tu especialidad.",
                    minlength: "Al menos 4 letras debe contener tu Ciudad."
                  },
                  descripcion: {
                    required: "Por favor, ingresa tu descripción.",
                    minlength: "Al menos 20 letras o caracteres debe contener tu descripcion."
                  }
                }
            });
          });
        </script>

    </body>
</html>
