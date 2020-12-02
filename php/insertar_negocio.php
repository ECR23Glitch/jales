<?php

require_once "config.php"; //Conexion

$nombre_n = "";
$telefono_n = "";
$correo_n = "";
$conidcn_n = "";
$calle_n = "";
$colonia_n = "";
$numext_n = "";
$numint_n = "";
$cp_n = "";
$municipio_n = "";
$estado_n = "";
$tipo_negocio = "";
$seguro = "";
$vacaciones = "";
$transporte = "";
$otro = "";

if($_SERVER["REQUEST_METHOD"]  == "POST"){
	$nombre_n = $_POST["nombre_n"];
	$telefono_n = $_POST["telefono_n"];
	$correo_n = $_POST["correo_n"];
	$conidcn = $_POST["conidcn"];
	$calle_n = $_POST["calle_n"];
	$colonia_n = $_POST["colonia_n"];
	$numext_n = $_POST["numext_n"];
	$numint_n = $_POST["numint_n"];
	$cp_n = $_POST["cp_n"];
	$municipio_n = $_POST["municipio_n"];
	$estado_n = $_POST["estado_n"];
	$tipo_negocio = $_POST["tipo_negocio"];
	$seguro = $_POST["seguro"];
	$vacaciones = $_POST["vacaciones"];
	$transporte = $_POST["transporte"];
	$otro = $_POST["otro"];

	$insertar_n = "INSERT INTO r_negocio (nombre_n, telefono_n, correo_n, conidcn, calle_n, colonia_n, numext_n, numint_n, cp_n, municipio_n, estado_n, tipo_negocio, seguro, vacaciones, transporte, otro) VALUES ('$nombre_n','$telefono_n','$correo_n','$conidcn','$calle_n','$colonia_n','$numext_n','$numint_n','$cp_n','$municipio_n','$estado_n','$tipo_negocio','$seguro','$vacaciones','$transporte','$otro')";

	if($conexion->query($insertar_n)){
		echo "\n Empresa registrada con exito";

	}else{

		echo "Error al crear el perfil" . $insertar_n . "<br>" . $conexion->error;
	}

		mysqli_close($conexion); // cierra de la conexion a la BD

	}

	?>