<?php
  include('conexion.php');


  $nom = $_POST['firstname'];
  $ap = $_POST['lastnamepapa'];
  $apm = $_POST['lastnamemama'];
  $mail = $_POST['email'];
  $cont = $_POST['password'];

  $sql = "INSERT INTO r_empleado (nombre, app,apm, correo, contraseña) VALUES ('$nom', '$ap','$apm','$mail', '$cont')";
  $stmt = $conn->prepare($sql);

  $stmt->execute();

  $comment_id = $stmt->insert_id;
 ?>
