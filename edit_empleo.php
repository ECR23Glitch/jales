<!--  SITIO - EDITOR DE UN EMPLEO O TRABAJO  REALIZADO POR UN USUARIO.  -->

<!DOCTYPE html>
<html>

    <!--ENCABEZADO-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!--Icono del navegador-->
        <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
        <title>Edita tu empleo</title>

        <!--Enlaces-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="assets/css/Header-Blue.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/floating-labels.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">

    </head>
      <!--Menu -->
      <header>
        <!--Color rojo de la barra-->
        <div class="py-2" style="background: #95140A;">
          <div class="container">
            <center><a href="empleos_usuarios.html"><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></a></center>
          </div>
        </div>
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background: #E4AF4D;">
          <div class="container">
            <span><a href="empleos_usuarios.html"><img src="assets/img/Titulo/jale_b_sp_1.png" class="img-fluid mr-3" style="width: 150px; height: 65px;"></a></span>
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
      <!--CUERPO-->
      <body style="background: #E4AF4D;"> <!-- Background gris-->
        <div class="container"><!-- Contenedor principal-->
            <div class="card shadow-lg o-hidden border-0 my-4">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="p-5">
                                <!--Título principal-->
                                <div class="container texto p-2 mg-1 texto" style="background: #EAF2F8;">
                                  <br>
                                  <h3 class="text-dark" style="text-align: center;"><strong> Edita tu empleo </strong></h3>
                                </div>
                                  <!-- Formulario para editar un empleo -->
                                  <form id="empleoedit">

                                      <!--Boton para pedir foto relacionada al empleo/---->
                                      <div class="text-center texto">
                                        <button type="button"  class="mb-3 mt-4 btn btn-info" data-toggle="modal" data-target="#myModalDos" style=" width: 160px; height: 60px; text-align: center;" >Agregar foto</button>
                                      </div>

                                      <!--2. Creación de la ventana del modal -->
                                      <div id="myModalDos" class="modal fade" role="dialog">
                                        <!--3. Permite ver el contenido del modal -->
                                        <div class="modal-dialog">
                                            <!--4. Aquí se coloca en condenido del modal-->
                                            <div class="modal-content">
                                                <!--5. Cabecera del modal-->
                                                <div class="modal-header texto">
                                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                                    <h4 class="modal-title">Selecciona una foto.</h4>
                                                </div>

                                                <!--6. Cuerpo del modal-->
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <p class="pchiquito" style="text-align:justify" >Instrucciones: <br> Haz clic en el botón "Seleccionar archivo" para escoger tu foto. <br><b>Nota: </b> Debe estar en tu escritorio. Luego de seleccionarla veras que aparece el nombre de la foto en un apartado. Posteriormente da clic en el botón "Subir foto" y listo.</p>

                                                        <!--Botón: Permite seleccionar un archivo para subirlo a al registro del empleo center><input name="uploadedfile" type="file" role="button" style="border-radius: 50px;width: 130px;text-align: center;height: 45px7;" /><br></center> -->

                                                        <!--Botón: Muestra tu foto/segun-->
                                                        <div class="border border-light p-3 mb-4">
                                                            <div class="text-center texto">
                                                                <button class="btn btn-primary" style="border-radius: 50px;width: 130px;text-align: center;height: 45px7;" value="Subir archivo" role="button" > Subir archivo </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--7. Pie del modal-->
                                                <div class="modal-footer texto">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                      </div> <!--/Termina el modal de la foto-->
                                      <br>

                                        <!--Nombre del empleo/-->
                                      <div class="form-group texto">
                                        <label>&nbsp;&nbsp;<strong>Nombre del empleo</strong></label>
                                        <input class="form-control" type="text" id="empleo" name="empleo" placeholder="Encargado de compras" style="border-radius: 50px;"/>
                                      </div>
                                      <br>
                                      <!--Nombre del empleador o empresa/-->
                                      <div class="form-group texto">
                                        <label>&nbsp;&nbsp;<strong>Nombre del empleador o empresa</strong></label>
                                          <input class="form-control" type="text" id="empleador" name="empleador" placeholder="Comercializadora García" style="border-radius: 50px;"/>
                                      </div>
                                      <br>
                                      <!--Áreas y Especialidades del empleo-->
                                      <div class="form-group row texto">
                                          <!--Área del empleo-->
                                          <div class="col-sm-6 mb-3 mb-sm-0"><label>&nbsp;&nbsp;<strong>Área del empleo:</strong></label><select class="form-control form-control" name="empArea" id="empArea" style="border-radius: 50px;">
                                              <optgroup label="This is a group">
                                                  <!--Nombre del área del empleo-->
                                                  <option value="12" selected="">This is item 1</option>
                                                  <option value="13">This is item 2</option>
                                                  <option value="14">This is item 3</option>
                                                </optgroup>
                                          </select></div>
                                              <!--Especialidad del empleo-->
                                          <div class="col-sm-6"><label>&nbsp;&nbsp;<strong>Especialidad solicitada:</strong></label><input class="form-control form-control-user" type="text" placeholder="Compras internacionales" id="empEspecialidad" name="empEspecialidad" style="border-radius: 50px;"/></div>
                                      </div>
                                      <br>
                                      <!--Salario y tipo de jornada-->
                                      <div class="form-group row texto">
                                          <!--Jornada-->
                                          <div class="col-sm-6"><label>&nbsp;&nbsp;<strong>Tipo de jornada:</strong></label><input class="form-control form-control-user" type="text" placeholder="Jornada Completa" id="jornada" name="jornada" style="border-radius: 50px;"/></div>
                                          <!--Salario-->
                                          <div class="col-sm-6"><label>&nbsp;&nbsp;<strong>Salario:</strong></label><input class="form-control form-control-user" type="text" placeholder="$9,500.00 mensuales" id="salario" name="salario" style="border-radius: 50px;"/></div>
                                      </div>
                                      <br>
                                      <!--Ubicación/-->
                                      <div class="form-group texto">
                                        <label>&nbsp;&nbsp;<strong>Ubicación</strong></label>
                                        <input class="form-control" type="text" id="empUbicacion" name="empUbicacion" placeholder="Avenida industrial #200, Colonia Ramos" style="border-radius: 50px;"/>
                                      </div>
                                      <br>

                                      <!--Descripcion-->
                                      <div class="form-group">
                                        <label class="texto">&nbsp;&nbsp;<strong>Descripción</strong></label>
                                        <textarea class="form-control labelchiquita" type="text" id="empDescripcion" name="empDescripcion" style="border-radius: 18px; height: 200px;" placeholder="Gestionar las compras de materia prima
Realizar compras directas e indirectas, papelería, insumos varios
Búsqueda de nuevos proveedores para compra de materiales
Realización de ordenes de compra"></textarea>
                                      </div>
                                      <br>

                                      <!--Requisitos-->
                                      <div class="form-group">
                                        <label class="texto">&nbsp;&nbsp;<strong>Descripción de tu personal</strong></label>
                                        <textarea class="form-control labelchiquita" type="text" id="empRequisitos" name="empRequisitos" placeholder="Educación mínima: Educación superior - Licenciatura
Años de experiencia: 1
Edad: 23-50
Disponibilidad de viajar: Si
Disponibilidad de cambio de residencia: Si" style="border-radius: 18px; height: 200px;"></textarea>
                                      </div>
                                      <br>
                                      <!--Botones para cancelar o registrar un empleo-->
                                      <div class="form-group row texto">
                                          <!--Botón para registrar un empleo-->
                                          <div class="col-sm-6"><button class="btn btn-block text-white btn-user" style="background: #23B439; border-radius: 50px;"id="baccept" type="submit">Publicar</button><hr></div>
                                          <!--Botón para cancelar un empleo-->
                                          <div class="col-sm-6"><a href="publicaciones_user.php" class="btn btn-block text-white btn-user" role="button" style="background: #F80F0F; border-radius: 50px;">Cancelar</a><hr></div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                    </div>
                </div>
            </div>
        </div><!--Fin del contenedor principal-->

        <footer class="text-center text-lg-start text-white" style="background: #D34C42;">
            <!-- Copyright -->
            <div class="text-center p-3 texto" >
              ©️ 2021 Copyright:
              <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
            </div>
        </footer>
        <!--Scripts-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- Scripts de validacion de cada uno de los form_registrer

        La logica es:
          En caso de qu|e el usuario llene correctamente la primera parte
          se habilita el boton para que este no de dos veces clic

          y puede continuar con el registro -->
        <script type = "text/javascript">

        /* Los botones inician en un estado inicial deshabilitados */
        $(document).ready(function(){
          $("#baccept").prop("disabled",true);


          $("#empleoedit").validate({
              rules: {
                empleo: {
                  required: true,
                  minlength: 3
                },
                empleador: {
                  required: true,
                  minlength: 3
                },
                jornada: {
                  required: true,
                  minlength: 10
                },
                salario: {
                  required: true,
                  minlength: 5
                },
                empUbicacion: {
                  required: true,
                  minlength: 15
                },
                empDescripcion: {
                  required: true,
                  minlength: 20
                },
                empRequisitos: {
                  required: true,
                  minlength: 20
                }
              },
              messages : {
                empleo: {
                  required: "Por favor, ingresa el nombre del empleo.",
                  minlength: "Al menos 3 letras debe de llevar el empleo."
                },
                empleador: {
                  required: "Por favor, ingresa nombre del empleador o empresa.",
                  minlength: "Al menos 3 letras debe de llevar el nombre del empleador o empresa."
                },
                jornada: {
                  required: "Por favor, ingresa el tipo de jornada.",
                  minlength: "Al menos 10 caracteres debe llevar el tipo de jornada."
                },
                salario: {
                  required: "Por favor, ingresa el salario.",
                  minlength: "Al menos 5 caracteres debe de llevar el salario."
                },
                empUbicacion: {
                  required: "Por favor, ingresa la ubicación del empleo.",
                  minlength: "Al menos 15 caracteres debe de llevar la ubicación."
                },
                empDescripcion: {
                  required: "Por favor, ingresa la descripción del empleo.",
                  minlength: "Al menos 20 letras debe de llevar la descripción."
                },
                empRequisitos: {
                  required: "Por favor, ingresa los requisitos del empleo.",
                  minlength: "Al menos 20 caracteres debe de llevar los requisitos."
                }
              }
          });

          $('#empleoregister').bind('change keyup', function() {
              if($(this).validate().checkForm()) {
                  $('#baccept').prop('disabled', false);
              } else {
                  $('#baccept').prop('disabled', true);
              }
            });

          });
        </script>
        <script type="text/javascript">
        $(document).ready(function(){
          $("#baccept").click(function(){
            event.preventDefault();
          });
        });
      </script>
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
    </body>
</html>