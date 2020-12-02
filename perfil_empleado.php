
<!-- CTRL + SHIFT + P = ESCRIBIMOS "INDENTATION: RELE.... LINES" PARA ORDENAR LAS LINEAS -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Jalate a jalar
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>

	<h1>Prueba de perfil - Usuario empleado.</h1>

	<p>Tus datos son:</p>

	<ul>
		<li><i>ID = </i><?php echo $user->getId_emp();  ?></li> <!-- mostrar dato de rfc -->

		<li><i>Nombre = </i><?php echo $user->getNombre();  ?></li><!-- mostrar dato de nombre -->

		<li><i>Apellido paterno = </i><?php echo $user->getApp();  ?></li><!--  mostrar dato de apelido -->

		<li><i>Apellido materno = </i><?php echo $user->getApm();  ?></li><!-- mostrar dato de clinica -->

		<li><i>Edad</i><?php echo $user->getEdad();  ?></li><!-- mostrar dato de  especialziacion -->

		<li><i>Sexo = </i><?php echo $user->getSexo();  ?></li><!-- mostrar dato de edad -->

		<li><i>Correo = </i><?php echo $user->getCorreo();  ?></li><!-- mostrar dato de sexo -->

		<li><i>Minucipio = </i><?php echo $user->getMunicipio();  ?></li><!-- mostrar dato de telefono  -->

		<li><i>Estado = </i><?php echo $user->getEstado();  ?></li><!-- mostrar dato de telefono  -->

		<li><i>Habilidad laboral = </i><?php echo $user->getH_laboral();  ?></li><!-- mostrar dato de telefono  -->

		<li><i>Cualidad = </i><?php echo $user->getCualidad();  ?></li>

		<li><i>Conocimiento = </i><?php echo $user->getConocimiento();  ?></li>

		<li><i>Otros = </i><?php echo $user->getOtro();  ?></li>
	</ul>

	<br><br>

	<button><a href="includes/logout.php">Cerrar Sesión</a></button> <!-- boton -->

</body>
</html>
