<?php
$conn = mysqli_connect("localhost","root","","chambas");
if ($conn->connect_error) {
    die("Fallo en la conexión: " . $conn->connect_error);
}
 ?>
