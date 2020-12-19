<?php
// Objeto que retorna como respuesta
$respuesta = array(
  'status' => 'error',
  '_post' => $_POST
);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include('db.php');
  // Conecta a la bd
  $db = new DB();
  $pdo = $db->connect();
  $stmt;
  // Constante. Nombre de la tabla de usuarios
  $USER_TABLE = 'usuario';

  // Botón de registro ------------------------------------------------------------
  if (isset($_POST['registro'])) {
    // Datos POST de entrada
    if (isset($_POST['firstname'])) $firsname = $_POST['firstname'];
    if (isset($_POST['lastname'])) $lastname = $_POST['lastname'];
    if (isset($_POST['email'])) $email = $_POST['email'];
    if (isset($_POST['telefono'])) $telefono = $_POST['telefono'];
    if (isset($_POST['password'])) $password = $_POST['password'];

    // Encripta la contraseña
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    // Cadena con script SQL para insertar usuario
    $query = "INSERT INTO $USER_TABLE (nombre, apellido, correo, telefono, clave)
    VALUES (:nombre, :apellido, :correo, :telefono, :clave)";
    // Arreglo asociativo con valores para execute()
    // Une el Script SQL con los datos
    $binding = [
      ':nombre' => $firsname,
      ':apellido' => $lastname,
      ':correo' => $email,
      ':telefono' => $telefono,
      ':clave' => $hashedPwd
    ];

    // Declaración preparada (evita inyecciones SQL)
    $stmt = $pdo->prepare($query);
    // Ejecuta la declaración
    if ($stmt->execute($binding)) {
      $respuesta['status'] = 'exito';
    } else {
      $respuesta['msg'] = 'ERROR: SQL EXCECUTE';
    }
    // User duplicate check ------------------------------------------------------
  } else if (isset($_POST['user_duplicate'])) {
    // Datos POST de entrada
    if (isset($_POST['email'])) $email = $_POST['email'];
    // Declaración preparada (evita inyecciones SQL)
    $stmt = $pdo->prepare("SELECT * FROM $USER_TABLE WHERE correo = ? LIMIT 1");
    // Ejecuta la declaración
    if ($stmt->execute([$email])) {
      // Agrega resultados al arreglo de retorno
      $respuesta['status'] = 'exito';
      $respuesta['duplicado'] = 0;
      // Si el correo existe, correo duplicado
      if ($stmt->rowCount() > 0) {
        $respuesta['duplicado'] = 1;
      }
    } else {
      $respuesta['msg'] = 'ERROR: SQL EXCECUTE';
    }
  } else if (isset($_POST['user_login'])) {
    // Datos POST de entrada
    if (isset($_POST['email'])) $email = $_POST['email'];
    if (isset($_POST['password'])) $password = $_POST['password'];
    // Declaración preparada (evita inyecciones SQL)
    $stmt = $pdo->prepare("SELECT * FROM $USER_TABLE 
      WHERE correo = :correo LIMIT 1");
    // Ejecuta la declaración
    if ($stmt->execute(array(':correo' => $email))) {
      // Agrega resultados al arreglo de retorno
      $respuesta['status'] = 'exito';
      $respuesta['match'] = 0;
      // Si el correo existe
      if ($stmt->rowCount() > 0) {
        // Obtiene los datos y los guarda en arreglo asociativo
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // Analiza la contraseña
        if (password_verify($password, $row['clave'])) {
          session_start();
          // agrega atributos al arreglo
          $_SESSION['username'] = $row['nombre'];
          $_SESSION['user_id'] = $row['ideus'];
          // Anuncia el match en la respuesta
          $respuesta['match'] = 1;
        }
      }
    } else {
      $respuesta['msg'] = 'ERROR: SQL EXCECUTE';
    }
  }
  // Cierra la declaración
  $stmt = null;
  // Cierra la conexión con la bd
  $pdo = null;
} else {
  $respuesta['msg'] = 'ERROR: NO POST METHOD';
}
// Imprime el objeto como JSON
echo json_encode($respuesta);
