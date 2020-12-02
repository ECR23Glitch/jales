<!-- Se crea el archivo para insertar valores a la tala R_EMPLEADO de la base de datos  "Chambas". 

	1. Se pide que se incluya la conexion realizada en el archivo "conexion.php", el cual nos permite comunicarnos con la BD.

	2. Definimos las variables a usar.

	3. Se insertan los nombres de los campos de la tabla = 21 (no contamos el id). 
		Nombre de los atributos de la tabla R_EMPLEADO de la BD Chambas.
		Recuerda que $X es el nombre de la variable que se usara para ingresar los registros (los mismos nombre de la tabla) y "Y" es el nombre colocado en "name" del formulario creado en index, ($_POST["Y"])

	4. Creamos una variable para realizar el INSERT (agregar los datos) a la base de datos.

-->

<?php
require_once "config.php";

$nombre = "";
$app = "";
$apm = "";
$edad = "";
$sexo = "";
$telefono = "";
$correo = "";
$conidce = "";
$calle = "";
$colonia = "";
$numext = "";
$numint = "";
$cp = "";
$municipio = "";
$estado = "";
$h_laboral = "";
$cualidad = "";
$conocimiento = "";
$otro = "";

if($_SERVER["REQUEST_METHOD"]  == "POST"){
		$nombre = $_POST["nombre"];
		$app = $_POST["app"];
		$apm = $_POST["apm"];
		$edad = $_POST["edad"];
		$sexo = $_POST["sexo"];
		$telefono = $_POST["telefono"];
		$correo = $_POST["correo"];
		$conidce = $_POST["conidce"];
		$calle = $_POST["calle"];
		$colonia = $_POST["colonia"];
		$numext = $_POST["numext"];
		$numint = $_POST["numint"];
		$cp = $_POST["cp"];
		$municipio = $_POST["municipio"];
		$estado = $_POST["estado"];
		$h_laboral = $_POST["h_laboral"];
		$cualidad = $_POST["cualidad"];
		$conocimiento = $_POST["conocimiento"];
		$otro = $_POST["otro"];

		$insertar_e = "INSERT INTO r_empleado (nombre,app,apm,edad,sexo,telefono,correo,conidce,calle,colonia,numext,numint,cp,municipio,estado,h_laboral,cualidad,conocimiento,otro) VALUES ('$nombre','$app','$apm','$edad','$sexo','$telefono','$correo','$conidce','$calle','$colonia','$numext','$numint','$cp','$municipio','$estado','$h_laboral','$cualidad','$conocimiento','otro')";

		if($conexion->query($insertar_e)){
			echo "\n Usuario registrado con exito";

		}else{

			echo "Error al crear el usuario." . $insertar_e . "<br>" . $conexion->error;;
		}

		mysqli_close($conexion); // cierra de la conexion a la BD
	}
?>