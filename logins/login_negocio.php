<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion sinedo negocio</title>
	<meta charset="UTF-8">
</head>
<body>

	<h1>Inicio de sesión de negocio</h1>
	<br>
	<form action="inicio_s_negocio.php" method="post">
		
			Correo:<br> 
			<input type="text" name="correo_n" value="" placeholder="Correo" id="correo_n"><br><br>

			Contraseña: <br>
			<input type="password" name="conidcn" value="" placeholder="Contraseña" id="conidcn"><br><br>

			<button type="submit" value="Iniciar">Iniciar Sesión</button> <!-- boton para enviar formulario -->
            <button type="submit" value="Regresar"><a href="index.html">Regresar</a></button> <!-- boton para regresar a la anterior pagina -->

	</form>

</body>
</html>