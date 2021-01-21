<?php
if (isset($_POST['email'])) {
    include('conection.php');
    // Conecta a la bd
    $db = new DB();
    $pdo = $db->connect();

    // datos entrantes
    $email = $_POST['email'];
    $password = $_POST['cont'];

    /* Ejecuta una sentencia preparada pasando un array de valores */
    $query = "SELECT cont, id, nivid FROM usuario WHERE correo = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);

    // objecto de respuesta (JSON)
    $respuesta = ['correctdata' => false] ;
    // usuario encontrado
    if ($stmt->rowCount() > 0) {
        // Datos del usuario en arreglo asociativo
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // verifica contraseña 
        if (password_verify($password, $user['cont'])) {
            // inicia sesión
            session_start();
            $_SESSION['user']['id'] = $user['id'];
            $_SESSION['user']['nivel'] = $user['nivid'];
            $respuesta['correctdata'] = true;
        }
    }
    // cierra la conexión 
    $pdo = null;
    echo json_encode($respuesta);
} else {
    echo "<h1>ño</h1>";
}
