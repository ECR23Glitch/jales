<?php
// solamente ejecuta script si es POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('../conexion.php');

    /* id del trabajo */
    $idetrab = (isset($_POST['idetrab'])) ? $_POST['idetrab'] : 1;

     /* sconsulta */
    $query = "SELECT descripcion, nom FROM trabajos WHERE idetrab = $idetrab";
    if ($result = $conn->query($query)) {
        /*  imprime la fila en formato json */
        $data = $result->fetch_array(MYSQLI_ASSOC);
        echo json_encode($data);
        /* libera el resultado */
        $result->close();
    }
    /* cierra la conexión a la bd */
    $conn=null;
}
