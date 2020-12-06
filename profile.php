<?php
include('assets/php/conexion.php');
$sql_sel = "SELECT *
FROM usuario";
$result = $conn->query($sql_sel);
$count = mysqli_num_rows($result);

 ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>profile.php</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="page-top"><div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3"><span>el jale</span></div>
            </a>
            <hr class="sidebar-divider my-0" />
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Tu mero</span></a></li>
                <li class="nav-item"><a class="nav-link" href="jales.php"><i class="fas fa-table"></i><span>Jales</span></a></li>
                <li class="nav-item"><a class="nav-link" href="register_jales.html"><i class="fas fa-user-circle"></i><span>Registra una chamba</span></a></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input type="text" class="bg-light form-control border-0 small" placeholder="Search for ..." />
                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto navbar-search w-100">
                                    <div class="input-group"><input type="text" class="bg-light form-control border-0 small" placeholder="Search for ..." />
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We&#39;ve noticed unusually high spending for your account.</p>
                                        </div>
                                    </a>
                                    <a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="avatars/avatar1.jpeg" /></a>
                                <div
                                    class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings</a><a class="dropdown-item"
                                        href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity log</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</a></div>
                </div>
                </li>
                </ul>
        </div>
        </nav>
        <div class="container-fluid"> <!-- Sección del perfil -->
            <h3 class="text-dark mb-4">Perfil</h3> <!-- Nobre de la sección. -->
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image3.jpeg" width="145" height="153" />
                            <div class="mb-3">
                                <button class="btn btn-primary btn-sm" type="button">Editar foto</button> <!-- Botón para editar perfil. -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3 d-none">
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
                                    <p class="text-white-50 small m-0">
                                        <i class="fas fa-arrow-up"></i> 5% since last month</p>
                                </div>
                            </div>
                        </div>
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
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i> 5% since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col">
						    <div class="card shadow mb-3">
							    <div class="card-header py-3">
				    				<p class="text-primary m-0 font-weight-bold">Usuario</p>
								</div>
								<div class="card-body">
				    				<form > <!-- Inicio del Form 1 = Nombre, usuario, correo, edad y sexo del usuario -->
	    							    <div class="form-row"> <!-- Inicio de las primeros 2 datos = usuario y correo -->
						    				<div class="col"> <!-- Columna del usuario -->
			    								<div class="form-group">
                                                    <label for="nombre_u"><strong>Usuario</strong></label>
													<imput class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2;" >
                                                    <?php ?> </imput> <!-- Nombre_usuario -->
												</div>
											</div>
											<div class="col"> <!-- Columna de correo -->
											    <div class="form-group">
                                                    <label for="correo"><strong>Correo</strong><br /></label>
													<!-- ** <imput class="form-control-plaintext" type="text" value="Plain Text Value" readonly style="border-bottom-color:#ada2a2;" /><!-- Correo del usuario -->
                                                    <p><?php ?></p>

												</div>
											</div>
										</div><!-- Cierre de la columna de los 2 primeros datos -->
										<div class="form-row"> <!-- Inicio de los otros 3 datos = nombre, edad y sexo -->
										    <div class="col offset-sm-0"> <!-- Columna de nombre -->
							    				<div class="form-group">
                                                    <label for="nombre"><strong>Nombre </strong><br /></label>
													<imput class="form-control-plaintext" type="text" value="Plain Text Value" readonly style="border-bottom-color:#ada2a2;" /> <!-- Nombre del usuario -->
												</div>
											</div>
											<div class="col"> <!-- Columna de edad -->
		    								    <div class="form-group">
                                                    <label for="edad"><strong>Edad</strong><br /></label>
													<imput class="form-control-plaintext" type="text" value="" readonly style="border-bottom-color:#ada2a2;" /> <!-- Edad del usuario -->
												</div>
											</div>
											<div class="col"> <!-- Columna de sexo -->
											    <div class="form-group"><label for="sexo"><strong>Sexo</strong><br /></label>
												    <imput class="form-control-plaintext" type="text" value="Sexo" readonly style="border-bottom-color:#ada2a2;" /> <!-- Sexo del usuario -->
												</div>
											</div>
										</div>
									</form> <!-- Fin del Form 1 -->
								</div>
							</div>
							<div class="card shadow"> <!-- Separador del Form 1 y Form 2 -->
			    				<div class="card-header py-3">
    								<p class="text-primary m-0 font-weight-bold">Lo encuentras en </p>
							</div>
							<div class="card-body">
	    						<form> <!-- Incio del Form 2 = Municipio y Estado -->
	    							<div class="form-row">
									    <div class="col">
											<div class="form-group">
                                                <label for="municipio"><strong>Municipio</strong><br /></label>
												<imput class="form-control-plaintext" type="text" value="Plain Text Value" readonly style="border-bottom-color:#ada2a2;" /> <!-- Municipio del usuario -->
											</div>
										</div>
											<div class="col">
												<div class="form-group">
                                                    <label for="estado"><strong>Estado</strong><br /></label>
													<imput class="form-control-plaintext" type="text" value="Plain Text Value" readonly style="border-bottom-color:#ada2a2;" /> <!-- Estado del usuario -->
											    </div>
											</div>
										</div>
										<div class="form-group">
                                            <button class="btn btn-primary" type="button">Editar perfil</button>
                                        </div>
									</form> <!-- Fin del Form 2 -->
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-5"></div>
        </div>
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright">
                <span>Copyright © Samurai Studio 2020</span>
            </div>
        </div>
    </footer>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflame.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
