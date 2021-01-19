<!--  SITIO - REGISTRO DEL EMPLEO O TRABAJO DE ALGUN USUARIO.  -->

<!DOCTYPE html>
<html>

    <!--ENCABEZADO-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
        <title>Registra tu empleo</title>

        <!--Enlaces-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="assets/css/Header-Blue.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/floating-labels.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <header>
      <!--Color rojo de la barra-->
      <div class="py-2" style="background: #95140A;">
        <div class="container">
          <!--Logo del sitio-->
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

                <!--Buscador   -->
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

    <!--CUERPO-->
    <body style="background: #E4AF4D;"> <!-- Background gris-->
      <div class="container"><!-- Contenedor principal-->
          <div class="card shadow-lg o-hidden border-0 my-4">
              <div class="card-body p-0">
                  <div class="row">
                      <div class="col-lg-10 offset-lg-1">
                          <div class="p-5">
                              <!--Título principal-->
                              <div class="text-center texto">
                                  <h1 class="text-dark mb-4 "><strong>Agrega un empleo</strong></h1>
                              </div>
                                <!-- Formulario para registrar un empleo -->
                                <form id="empleoregister">


                                    <!--Boton para pedir foto relacionada al empleo/---->
                                    <div class="text-center">
                                      <button type="button Texto"  class="mb-3 mt-4 btn btn-info texto" data-toggle="modal" data-target="#myModalDos" style=" width: 160px; height: 60px; text-align: center;" >Agregar foto</button>
                                    </div>

                                    <!--2. Creación de la ventana del modal -->
                                    <div id="myModalDos" class="modal fade" role="dialog">
                                      <!--3. Permite ver el contenido del modal -->
                                      <div class="modal-dialog">
                                          <!--4. Aquí se coloca en condenido del modal-->
                                          <div class="modal-content">
                                              <!--5. Cabecera del modal-->
                                              <div class="modal-header">
                                                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                                  <h4 class="modal-title texto">Selecciona una foto.</h4>
                                              </div>

                                              <!--6. Cuerpo del modal-->
                                              <div class="modal-body">
                                                  <div class="container">
                                                      <p  class="pchiquito"style="text-align:justify" ><strong>Instrucciones:</strong> <br> Haz clic en el botón "Seleccionar archivo" para escoger tu foto. <br><b>Nota: </b> Debe estar en tu escritorio. Luego de seleccionarla veras que aparece el nombre de la foto en un apartado. Posteriormente da clic en el botón "Subir foto" y listo.</p>

                                                      <!--Botón: Permite seleccionar un archivo para subirlo a al registro del empleo center><input name="uploadedfile" type="file" role="button" style="border-radius: 50px;width: 130px;text-align: center;height: 45px7;" /><br></center> -->

                                                      <!--Botón: Muestra tu foto/segun-->
                                                      <div class="border border-light p-3 mb-4">
                                                          <div class="text-center">
                                                              <button class="btn btn-primary texto" style="border-radius: 50px;width: 130px;text-align: center;height: 45px7;" value="Subir archivo" role="button" > Subir archivo </button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <!--7. Pie del modal-->
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-default texto" data-dismiss="modal">Cerrar</button>
                                              </div>
                                          </div>
                                      </div>
                                    </div> <!--/Termina el modal de la foto-->
                                    <br>

                                      <!--Nombre del empleo/-->
                                    <div class="form-group form-label-group">
                                      <input class="form-control labelchiquita" type="text" id="empleo" name="empleo" placeholder="Nombre del Empleo" style="border-radius: 50px;"/>
                                      <label class="labelchiquita" for="empleo">Nombre del empleo</label>
                                    </div>

                                    <!--Nombre del empleador o empresa/-->
                                    <div class="form-group form-label-group">
                                      <input class="form-control labelchiquita" type="text" id="empleador" name="empleador" placeholder="Nombre del Empleador" style="border-radius: 50px;"/>
                                      <label class="labelchiquita" for="empleo">Nombre del empleador o empresa</label>
                                    </div>

                                    <!--Áreas y Especialidades del empleo-->
                                    <div class="form-group row">
                                        <!--Área del empleo-->
                                        <div class="col-sm-6 mb-3 mb-sm-0"><label class="titulo"><strong>&nbsp;&nbsp;Área del empleo:</strong></label><select class="form-control form-control" name="empArea" id="empArea" style="border-radius: 50px;">
                                            <optgroup class="labelchiquita" label="This is a group">
                                                <!--Nombre del área del empleo-->
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                              </optgroup>
                                        </select></div>
                                            <!--Especialidad del empleo-->
                                        <div class="col-sm-6"><label class="titulo">&nbsp;&nbsp;Especialidad solicitada:</label><input class="form-control form-control-user labelchiquita" type="text" id="empEspecialidad" name="empEspecialidad" style="border-radius: 50px;"/></div>
                                    </div>

                                    <!--Salario y tipo de jornada-->
                                    <div class="form-group row">
                                        <!--Jornada-->
                                        <div class="col-sm-6"><label class="titulo">&nbsp;&nbsp;Tipo de jornada:</label><input class="form-control form-control-user labelchiquita" type="text" id="jornada" name="jornada" style="border-radius: 50px;"/></div>
                                        <!--Salario-->
                                        <div class="col-sm-6"><label class="titulo">&nbsp;&nbsp;Salario:</label><input class="form-control form-control-user labelchiquita" type="text" id="salario" name="salario" style="border-radius: 50px;"/></div>
                                    </div>

                                    <!--Ubicación/-->
                                    <div class="form-group form-label-group">
                                      <input class="form-control labelchiquita" type="text" id="empUbicacion" name="empUbicacion" placeholder="Ubicación" style="border-radius: 50px;"/>
                                      <label class="texto" for="ubicacion">Ubicación</label>
                                    </div>

                                    <!--Descripcion-->
                                    <div class="form-group form-label-group">
                                      <textarea class="form-control labelchiquita" type="text" id="empDescripcion" name="empDescripcion" placeholder="Descripcion" style="border-radius: 18px; height: 200px;"></textarea>
                                      <label class="texto" for="empdescripcion">Descripción del empleo</label>
                                    </div>

                                    <!--Requisitos-->
                                    <div class="form-group form-label-group">
                                      <textarea class="form-control labelchiquita" type="text" id="empRequisitos" name="empRequisitos" placeholder="Requisitos" style="border-radius: 18px; height: 200px;"></textarea>
                                      <label class="texto"for="empRequisitos">Descripción de tu personal</label>
                                    </div>
                                    <br>
                                    <!--Botones para cancelar o registrar un empleo-->
                                    <div class="form-group row">
                                        <!--Botón para registrar un empleo-->
                                        <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #23B439; border-radius: 50px;"id="baccept" type="submit">Publicar</button><hr></div>
                                        <!--Botón para cancelar un empleo-->
                                        <div class="col-sm-6"><a href="publicaciones_user.php" class="btn btn-block text-white btn-user texto" role="button" style="background: #F80F0F; border-radius: 50px;">Cancelar</a><hr></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                  </div>
              </div>
          </div>
      </div><!--Fin del contenedor principal-->

      <!--footer class="bg-light text-center text-lg-start">

          < Copyright >
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-dark" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
          </div>
      </footer-->
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


          $("#empleoregister").validate({
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
                  required: "Por favor, ingresa el nombre del empleo",
                  minlength: "Al menos 3 letras debe de llevar el empleo"
                },
                empleador: {
                  required: "Por favor, ingresa nombre del empleador o empresa",
                  minlength: "Al menos 3 letras debe de llevar el nombre del empleador o empresa"
                },
                jornada: {
                  required: "Por favor, ingresa el tipo de jornada",
                  minlength: "Al menos 10 caracteres debe llevar el tipo de jornada"
                },
                salario: {
                  required: "Por favor, ingresa el salario",
                  minlength: "Al menos 5 caracteres debe de llevar el salario"
                },
                empUbicacion: {
                  required: "Por favor, ingresa la ubicación del empleo",
                  minlength: "Al menos 15 caracteres debe de llevar la ubicación"
                },
                empDescripcion: {
                  required: "Por favor, ingresa la descripción del empleo",
                  minlength: "Al menos 15 letras debe de llevar la descripción"
                },
                empRequisitos: {
                  required: "Por favor, ingresa los requisitos del empleo",
                  minlength: "Al menos 15 caracteres debe de llevar los requisitos"
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
    </body>
</html>