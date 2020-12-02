<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion sinedo empleado</title>
	<meta charset="UTF-8">
</head>
<body>

	<h1>Inicio de sesión de empleado</h1>
	<br>
	<form action="inicio_s_empleado.php" method="post">
		
			Correo:<br> 
			<input type="text" name="correo" value="" placeholder="Correo" id="correo"><br><br>

			Contraseña: <br>
			<input type="password" name="conidce" value="" placeholder="Contraseña" id="conidce"><br><br>

			<button type="submit" value="Iniciar">Iniciar Sesión</button> <!-- boton para enviar formulario -->
            <button type="submit" value="Regresar"><a href="index.html">Regresar</a></button> <!-- boton para regresar a la anterior pagina -->
	</form>

</body>
</html>