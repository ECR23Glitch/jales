<?php

//Conexion a la base de datos
include('conexion.php');

//Validación de las variables para hacer el insert
$nom = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$cat = (isset($_POST['cate'])) ? $_POST['cate'] : '';
$descr = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';



//Inserta los datos a la tabla usuario
$sql = "INSERT INTO trabajos (nom,categoria,descripcion) VALUES ('$nom','$cat','$descr')";

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
