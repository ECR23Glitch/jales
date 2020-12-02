<!-- CTRL + SHIFT + P = ESCRIBIMOS "INDENTATION: RELE.... LINES" PARA ORDENAR LAS LINEAS -->
<!DOCTYPE html>
<html>
<head>
	<title>Perfil - perfil empleado</title>
	<meta charset="UTF-8">
</head>
<body>

	<h1>Prueba de perfil - Usuario negocio.</h1>

	<p>Tus datos son:</p>

	<ul>
		<li><i>ID = </i><?php echo $user->getId_ne();  ?></li> <!-- mostrar dato de rfc -->
		
		<li><i>Nombre = </i><?php echo $user->getNombre_n();  ?></li><!-- mostrar dato de nombre -->

		<li><i>Correo = </i><?php echo $user->getCorreo_n();  ?></li><!-- mostrar dato de sexo -->

		<li><i>Minucipio = </i><?php echo $user->getMunicipio_n();  ?></li><!-- mostrar dato de telefono  -->

		<li><i>Estado = </i><?php echo $user->getEstado_n();  ?></li><!-- mostrar dato de telefono  -->

		<li><i>Tipo de negocio = </i><?php echo $user->getTipo_negocio();  ?></li><!-- mostrar dato de telefono  -->

		<li><i>¿Cuenta con seguro? = </i><?php echo $user->getSeguro();  ?></li>

		<li><i>¿Da vacaiones? = </i><?php echo $user->getVacaciones();  ?></li>

		<li><i>¿Cuenta con transporte? = </i><?php echo $user->getTransporte();  ?></li>

		<li><i>Otros = </i><?php echo $user->getOtro();  ?></li>
	</ul>

	<br><br>

	<button><a href="includes/logout.php">Cerrar Sesión</a></button> <!-- boton -->

</body>
</html>