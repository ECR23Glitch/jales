<?php

//Conexion a la base de datos
include('conexion.php');

//Validación de las variables para hacer el insert
$nom = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$contraseña = (isset($_POST['contraseña'])) ? $_POST['contraseña'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';


//Inserta los datos a la tabla usuario
$sql = "INSERT INTO usuario (nom,apellidos,correo,contraseña,telefono) VALUES ('$nom','$apellidos','$correo','$contraseña',$telefono)";

$respuesta;

//Sí realizó el insert, que genere una respuesta
if($conn->query($sql)){
  $respuesta = array(
    'exito' => 1
  );
} else{ //Sino, que mande un error
  $respuesta = array(
    'exito' => 0,
    'msg' => $conn->error
  );
}

//Que tome el valor de respuesta (Esto se va a assets/js/register.js)
echo json_encode($respuesta);

  mysqli_close($conn); // cierra de la conexion a la BD
  
?>
