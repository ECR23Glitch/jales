<?php

  include('conection.php');
  // Conecta a la bd
  $db = new DB();
  $pdo = $db->connect();
  $stmt;
  // Constante. Nombre de la tabla de usuarios
  $USER_TABLE = 'usuario';
    // Datos POST de entrada
     $firsname = $_POST['nombre'];
     $lastnamep = $_POST['a_paterno'];
     $lastnamem = $_POST['a_materno'];
     $email = $_POST['email'];
     $contr = password_hash($_POST['cont'], PASSWORD_DEFAULT);
     $fecnaci = date("y-m-d", strtotime($_POST['fecha']));
     $arids = (int)$_POST['empArea'];
     $espid = $_POST['empEspecialidad'];
     $tel = $_POST['telefono'];
     $rfc = $_POST['rfc'];
     $ine = $_POST['ine'];
     $des = $_POST['descripcion'];
     $sex = $_POST['genero'];

    $query = "SELECT id FROM usuario WHERE correo = :correo";
    if($stmt = $pdo -> prepare($query)){
      $binding = [
        ':correo' => $email
      ];
      if($stmt -> execute($binding)){
        $stmt = $row ->rowCount();
        if($row == 1){
          echo '<script>
          toastr["warning"]("Ese usuario ya existe")

            toastr.options = {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
          </script>
          ';
        }else{
          // code...
          // Cadena con script SQL para insertar usuario
          $query = "INSERT INTO $USER_TABLE
          (nom, app, apm, correo, cont, fecnac, arid, esp, telefono, sexo, rfc, ine, descripcion)
          VALUES (:nom, :app, :apm, :correo, :cont, :fecnac, :arid, :esp,
          :tel, :sexo, :rfc, :ine, :des)";
          // Arreglo asociativo con valores para execute()
          // Une el Script SQL con los datos
          $binding = [
            ':nom' => $firsname,
            ':app' => $lastnamep,
            ':apm' => $lastnamem,
            ':correo' => $email,
            ':cont' => $contr,
            ':fecnac' => $fecnaci,
            ':arid' => $arids,
            ':esp' => $espid,
            ':tel' => $tel,
            ':sexo' => $sex,
            ':rfc' => $rfc,
            ':ine' => $ine,
            ':des' => $des
          ];

          // Declaración preparada (evita inyecciones SQL)
          $stmt = $pdo->prepare($query);
          // Ejecuta la declaración
          $stmt->execute($binding);
        }
      }
    }
?>
