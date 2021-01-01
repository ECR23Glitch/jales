<?php

  include('conection.php');
  // Conecta a la bd
  $db = new DB();
  $pdo = $db->connect();
  $stmt;
  // Constante. Nombre de la tabla de usuarios
  $USER_TABLE = 'usuario';
    // Datos POST de entrada
     $cont = $_POST['nombre'];
     $fecnac = $_POST['a_paterno'];
     $arid = $_POST['a_materno'];
     $espid = $_POST['email'];

    // Cadena con script SQL para insertar usuario
    $query = "INSERT INTO $USER_TABLE (nom, app, apm, correo)
    VALUES (:nom, :app, :apm, :correo)";
    // Arreglo asociativo con valores para execute()
    // Une el Script SQL con los datos
    $binding = [
      ':nom' => $firsname,
      ':app' => $lastnamep,
      ':apm' => $lastnamem,
      ':correo' => $email
    ];

    // Declaración preparada (evita inyecciones SQL)
    $stmt = $pdo->prepare($query);
    // Ejecuta la declaración
    $stmt->execute($binding);
?>
