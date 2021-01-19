<!--  SITIO - INICIO DE SESIÓN Prueba de que me sirve aun la rama-->
<?php
require('assets/php/conection.php');
$db = new DB();
$pdo = $db->connect();
$stmt;
// Constante. Nombre de la tabla de usuarios
$USER_TABLE = 'area';
$query = "SELECT * FROM $USER_TABLE";
$stmt = $pdo -> prepare($query);
$stmt -> execute(array());

 ?>
<html>

    <!--ENCABEZADO-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
        <title>Registro</title>

        <!--Enlaces-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="assets/css/Header-Blue.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/floating-labels.min.css">
        <link rel="stylesheet" href="assets/css/toastr.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <header class="py-2" style="background: #95140A;">
      <div class="container-fluid px-5 py-2">
          <center><a href="#"><img src="assets/img/Logo/color.png" class="img-fluid" style="width: 120px; height: 85px;"></a></center>
      </div>
    </header>
    <!--CUERPO-->
    <body style="background: #E4AF4D;">
      <form name="registro" id="registro" action="#" method="post">
        <!---------------------------------- PARTE 1 DEL REGISTRO ------------------------------------->
        <div class="container" id="c1"><!-- Contenedor principal-->
            <div class="card shadow-lg o-hidden border-0 my-4">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="p-5">
                                <!--Título principal-->
                                <div class="text-center texto">
                                    <h2 class="text-dark mb-4 ">Registro</h2>
                                </div>
                                        <!--Nombre del usuario/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control labelchiquita" maxlength="100" type="text" id="nombre" name="nombre" pattern="[a-zA-Z]+" placeholder="Nombre" style="border-radius: 50px;"/>
                                        <label class="texto" for="nombre">Nombre</label>
                                      </div>
                                      <br>
                                      <!--<div class="">
                                        <br>
                                      </div>-->

                                      <!--Apellido paterno/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control labelchiquita" maxlength="100" type="text" id="a_paterno" name="a_paterno" pattern="[a-zA-Z]+"
                                  placeholder="Apellido paterno" style="border-radius: 50px;"/>
                                        <label class="texto" for="a_paterno">Apellido Paterno</label>
                                      </div>
                                      <br>
                                      <!--Apellido materno/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control labelchiquita" maxlength="100" type="text" id="a_materno" name="a_materno" pattern="[a-zA-Z]+"
                                  placeholder="Apellido materno" style="border-radius: 50px;"/>
                                        <label class="texto" for="a_materno">Apellido Materno</label>
                                      </div>
                                      <br>
                                      <!--Correo electrónico/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control labelchiquita" maxlength="100" type="email" id="email" name="email"
                                  placeholder="Correo electrónico" style="border-radius: 50px;"/>
                                        <label class="texto" for="email">Correo electrónico</label>
                                      </div>
                                      <div id="result-username"></div>
                                      <br>
                                       <!--Barra de proceso-->
                                      <div class="form-group">
                                          <div class="progress">
                                              <div class="progress-bar barra" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"  style="border-radius: 50px; width: 33%;">33%</div>
                                          </div>
                                      </div>

                                      <br>
                                      <!--Botones de regresar y siguiente-->
                                      <div class="form-group row">
                                        <!--Botón para regresar-->
                                        <div class="col-sm-6"><a href="index.html" class="btn btn-block text-white btn-user texto" role="button" style="background: #EF9411; border-radius: 50px;">Regresar</a><hr></div>
                                        <!--Botón de siguiente-->
                                        <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #5969D8; border-radius: 50px;"id="bnext1">Siguiente</button><hr></div>
                                      </div>
                                  </div>
                          </div>
                    </div>
                </div>
            </div>
        </div><!--Fin del contenedor del parte 1-->


          <!---------------------------------- PARTE 2 DEL REGISTRO ------------------------------------->
        <div class="container" id="c2" style="display:none;"><!-- Contenedor principal-->
            <div class="card shadow-lg o-hidden border-0 my-4">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="p-5">
                                <!--Título principal-->
                                <div class="text-center texto">
                                    <h2 class="text-dark mb-4">Registro</h2>
                                </div>
                                   <!--Boton para pedir foto relacionada al usuario/---->
                                    <div class="text-center">
                                      <button type="button"  class="mb-3 mt-4 btn btn-info texto" data-toggle="modal" data-target="#myModal" style=" width: 160px; height: 60px; text-align: center;" >Agregar foto</button>
                                    </div>

                                    <!--2. Creación de la ventana del modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                      <!--3. Permite ver el contenido del modal -->
                                      <div class="modal-dialog">
                                          <!--4. Aquí se coloca en condenido del modal-->
                                          <div class="modal-content">
                                              <!--5. Cabecera del modal-->
                                              <div class="modal-header">
                                                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                                  <h4 class="modal-title texto"><strong>Selecciona una foto.</strong></h4>
                                              </div>

                                              <!--6. Cuerpo del modal-->
                                              <div class="modal-body">
                                                  <div class="container">
                                                      <p  class="pchiquito" style="text-align:justify" >Instrucciones: <br> Haz clic en el botón "Seleccionar archivo" para escoger tu foto. <br><b>Nota: </b> Debe estar en tu escritorio. Luego de seleccionarla veras que aparece el nombre de la foto en un apartado. Posteriormente da clic en el botón "Subir foto" y listo.</p>

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
                                    <!--Contraseña/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control labelchiquita" type="password" maxlength="100" id="cont" name="cont" placeholder="Contraseña" style="border-radius: 50px;"/>
                                        <label class="texto" for="cont">Contraseña</label>
                                      </div>
                                      <br>
                                    <!--Fecha de nacimiento-->
                                      <div class="form-group">
                                        <label class="titulo" for="fecha">&nbsp;&nbsp;&nbsp;Fecha de nacimiento:</label>
                                        <input id="fecha" name="fecha" class="form-control labelchiquita" type="date" style="border-radius: 50px; height: 45px7;"/>
                                      </div>
                                      <br>
                                    <!--Áreas y Especialidades del empleo-->
                                    <div class="form-group row">
                                        <!--Área a la que va dirigida el usuario-->
                                        <div class="col-sm-6 mb-3 mb-sm-0"><label class="titulo">&nbsp;&nbsp;Área del empleo que te interesa:</label>
                                          <select class="form-control form-control labelchiquita" name="empArea" id="empArea" style="border-radius: 50px;">
                                            <optgroup class="labelchiquita" label="Areas disponibles">
                                              <?php
                                                $cont = 0;
                                                foreach ($stmt as $row){
                                               ?>
                                                <!--Nombre del área del usuario-->
                                                <option class="labelchiquita" value="<?php echo $cont; ?>"><?php echo $row["nombre"]; ?></option>
                                              <?php
                                              $cont += 1;
                                            }
                                               ?>
                                              </optgroup>
                                        </select>
                                      </div>
                                            <!--Especialidad del usuario-->
                                        <div class="col-sm-6">
                                          <label class="titulo">&nbsp;&nbsp;Especialidad adquirida:</label>
                                          <input class="form-control form-control-user labelchiquita" maxlength="50" type="text" id="empEspecialidad" name="empEspecialidad" style="border-radius: 50px;"/></div>
                                    </div>
                                    <br>

                                       <!--Barra de proceso-->
                                      <div class="form-group">
                                          <div class="progress">
                                              <div class="progress-bar barra" aria-valuenow="66" aria-valuemin="0" aria-valuemax="5000"  style="border-radius: 50px; width: 66%;">66%</div>
                                          </div>
                                      </div>

                                      <br>
                                      <!--Botones de regresar y siguiente-->
                                      <div class="form-group row">
                                        <!--Botón para regresar-->
                                        <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #EF9411; border-radius: 50px;"id="back1">Regresar</button><hr></div>
                                        <!--Botón de siguiente-->
                                        <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #5969D8; border-radius: 50px;"id="bnext2">Siguiente</button><hr></div>
                                      </div>
                                  </div>
                          </div>
                    </div>
                </div>
            </div>
        </div><!--Fin del contenedor del parte 2-->


          <!---------------------------------- PARTE 3 DEL REGISTRO ------------------------------------->
        <div class="container" id="c3" style="display:none;"><!-- Contenedor principal-->
            <div class="card shadow-lg o-hidden border-0 my-4">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="p-5">
                                <!--Título principal-->
                                <div class="text-center texto">
                                    <h2 class="text-dark mb-4">Registro</h2>
                                </div>
                                        <!--Número telefónico/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control labelchiquita" maxlength="10" type="text" id="telefono" name="telefono" placeholder="Número telefónico" style="border-radius: 50px;"/>
                                        <label class= "texto" for="telefono">Número telefónico</label>
                                      </div>
                                      <br>
                                      <!--Sexo-->
                                      <div class="form-group">
                                        <label class="titulo">&nbsp;&nbsp;&nbsp;Sexo:</label>
                                      </div>
                                      <div class="text-center texto">
                                          <div class="form-group row">
                                              <div class="col-sm-4 mb-3 mb-sm-8">
                                                 <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="formCheck-3" value="femenino" name="genero"/><label>Femenino</label>
                                                 </div>
                                              </div>
                                             <div class="col-sm-4 mb-3 mb-sm-8">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="formCheck-2" value="masculino" name="genero"/><label>Masculino</label>
                                                </div>
                                             </div>
                                             <div class="col-sm-4 mb-3 mb-sm-8">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="formCheck-1" value="otro" name="genero" checked /><label>Otro</label>
                                                </div>
                                            </div>
                                          </div>
                                      </div><!--Fin del div - sexo-->

                                       <!--RFC/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control labelchiquita" maxlength="13" type="text" id="rfc" name="rfc" placeholder="RFC" style="border-radius: 50px;"/>
                                        <label class="texto" for="rfc">RFC</label>
                                      </div>
                                      <br>
                                      <!--Clave INE/-->
                                      <div class="form-group form-label-group">
                                        <input class="form-control labelchiquita" maxlength="13" type="text" id="ine" name="ine"placeholder="Clave INE" style="border-radius: 50px;"/>
                                        <label class="texto" for="ine">Clave INE</label>
                                      </div>
                                      <br>
                                      <!--Descripcion-->
                                      <div class="form-group form-label-group">
                                        <textarea class="form-control labelchiquita" maxlength="5000" type="text" name="descripcion" id="descripcion" placeholder="Descripcion" style="border-radius: 18px; height: 200px;"></textarea>
                                        <label class="texto" for="descripcion">Descripción </label>
                                      </div>
                                      <br>
                                       <!--Barra de proceso-->
                                      <div class="form-group">
                                          <div class="progress">
                                              <div class="progress-bar barra" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"  style="border-radius: 50px; width: 100%;">100%</div>
                                          </div>
                                      </div>

                                      <!--Botones de regresar y siguiente-->
                                      <div class="form-group row">
                                        <!--Botón para regresar-->
                                        <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #EF9411; border-radius: 50px;"id="back2">Regresar</button><hr></div>
                                        <!--Botón de finalizar-->
                                        <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #23B439; border-radius: 50px;"id="bnext3" type="submit">Finalizar</button><hr></div>
                                      </div>
                                  </div>
                          </div>
                    </div>
                </div>
            </div>
        </div><!--Fin del contenedor del parte 1-->
      </form>

        <!--footer class="bg-light text-center text-lg-start">
            < Copyright -->
            <!--div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
              © 2021 Copyright:
              <a class="text-dark" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
            </div>
        </footer-->
        <!--Inicio footer-->
        <footer class="text-center text-lg-start text-white" style="background: #D34C42;">
          <!-- Copyright -->
          <div class="text-center p-3 texto" >
            ©️ 2021 Copyright:
            <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
          </div>
      </footer>
        <!--Fin Footer-->

        <!--Scripts-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/toastr.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <!-- Scripts de validacion de cada uno de los form_registrer

        La logica es:
          En caso de qu|e el usuario llene correctamente la primera parte
          se habilita el boton para que este no de dos veces clic

          y puede continuar con el registro -->
        <script type = "text/javascript">
          $(document).ready(function(){
          $("#bnext3").prop("disabled",true);
          $("#registro").validate({
              rules: {
                nombre : {
                  required: true,
                  minlength: 3
                },
                a_paterno: {
                  required: true,
                  minlength: 3
                },
                a_materno: {
                  required: true,
                  minlength: 3
                },
                email: {
                  required: true,
                  email: true
                },
                cont : {
                  required: true,
                  minlength: 8
                },
                fecha: {
                  required: true
                },
                empEspecialidad:{
                  required: true,
                  minlength: 4
                },
                telefono : {
                  required: true,
                  number: true,
                  minlength: 10
                },
                rfc : {
                  required: true,
                  minlength: 12
                },
                ine: {
                  required: true,
                  minlength:13
                },
                descripcion: {
                  required: true,
                  minlength: 20
                }
              },
              messages : {
                nombre: {
                  required: "Por favor, ingresa tu nombre",
                  minlength: "Al menos 3 letras debe de llevar tu nombre"
                },
                a_paterno: {
                  required: "Por favor, ingresa tu apellido paterno",
                  minlength: "Al menos 3 letras debe de llevar tu apellido paterno"
                },
                a_materno: {
                  required: "Por favor, ingresa tu apellido materno",
                  minlength: "Al menos 3 letras debe de llevar tu apellido materno"
                },
                email: {
                  required: "Por favor, ingresa tu correo electrónico",
                  email: "El formato del correo electrónico debe de ser: abc@dominio.extension"
                },
                cont: {
                  required: "Por favor, ingresa tu contraseña y guardala muy bien",
                  minlength: "Al menos 8 letras o caracteres debe contener la contraseña"
                },
                fecha: {
                  required: "Por favor, ingresa tu fecha de nacimiento"
                },
                empEspecialidad:{
                  required: "Por favor, ingresa tu Especialidad",
                  minlength: "Debe tener 4 letras o caracteres la especialidad"
                },
                telefono: {
                  required: "Por favor, ingresa un número telefónico",
                  number: "Este campo solo admite caracteres numéricos",
                  minlength: "Debe tener 10 digitos para ser valido"
                },
                rfc: {
                  required: "Por favor, ingresa tu RFC",
                  minlength: "Al menos 12 letras debe de contener tu RFC para ser valido"
                },
                ine: {
                  required: "Por favor, ingresa tu INE",
                  minlength: "Al menos 13 letras debe de contener tu INE para ser valido"
                },
                descripcion: {
                  required: "Por favor, ingresa una descripcion nos interesa saber de ti",
                  minlength: "Al menos 20 letras o caracteres deben de contener tu descripcion"
                }
              }
          });

          $('#registro').bind('change keyup', function() {
              if($(this).validate().checkForm()) {
                  $('#bnext3').prop('disabled', false);
              } else {
                  $('#bnext3').prop('disabled', true);
              }
            });

          });
        </script>

        <!-- Aca cambiaran los divs -->
        <script type="text/javascript">
          $(document).ready(function(){
            $('#bnext3').prop('disabled', true);
            //Next hacia c2
            $("#bnext1").click(function(){
              event.preventDefault();
              if( ($('#nombre').val() == '') || ($('#a_paterno').val() == '') || ($('#a_materno').val() == '') || ($('#email').val() == '')){
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
                $("#c1").hide();
                $("#c2").show(1000);
              }
            });

            $("#bnext2").click(function(){
              event.preventDefault();
              if( ($('#cont').val() == '') || ($('#empEspecialidad').val() == '')){
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
                $("#c2").hide();
                $("#c3").show(1000);
              }
            });

            //Back hacia c1
            $("#back1").click(function(){
              event.preventDefault();
              $("#c2").hide();
              $("#c1").show(1000);
            });

            //Next hacia c3
            $("#bnext2").click(function(){
              event.preventDefault();
              if( ($('#cont').val() == '') || ($('#empEspecialidad').val() == '') || ($('#fecha').val() == '')){
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
                $("#c2").hide();
                $("#c3").show(1000);
              }
            });

            //Back hacia c2
            $("#back2").click(function(){
              event.preventDefault();
              $("#c3").hide();
              $("#c2").show(1000);
            });

          });
        </script>

        <script type="text/javascript">
        $(document).ready(function () {
            $('#bnext3').click(function(){
                // XMLHttpRequest
                event.preventDefault();
                var url1 = "assets/php/registro-user.php";
                  $.ajax({
                     type: "POST",
                     url: url1,
                     data: $("#registro").serialize(),
                     success: function(data)
                     {
                             toastr["success"]("Bienvenido", "Se ha completado tu registro");
                             toastr.options = {
                                      "closeButton": true,
                                      "debug": false,
                                      "newestOnTop": false,
                                      "progressBar": false,
                                      "positionClass": "toast-top-center",
                                      "preventDuplicates": false,
                                      "onclick": $(location).attr('href','login.php'),
                                      "showDuration": "3000",
                                      "hideDuration": "1000",
                                      "timeOut": "5000",
                                      "extendedTimeOut": "1000",
                                      "showEasing": "swing",
                                      "hideEasing": "linear",
                                      "showMethod": "fadeIn",
                                      "hideMethod": "fadeOut"
                                    }

                         }
                 });
            });
        });
        </script>

        <script type="text/javascript">
          $(document).ready(function(){
            $('#email').on('blur', function(){
              $('#result-username').html('<p> Toy cargando </p>').fadeOut(1000);
              var correo = $(this).val();
              $.ajax({
                type: "POST",
                url: "assets/php/query-existeus.php",
                data: {"correo":correo},
                success: function(data){
                  $('#result-username').fadeIn(1000).html(data);
                }
              });
            });
          });
        </script>
    </body>
</html>