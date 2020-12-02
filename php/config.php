<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'chambas');
 
/* Attempt to connect to MySQL database */
$conexion = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$conexion2 = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

?>