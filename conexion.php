<?php
$host = "localhost";
$user = "root";
$password = "Omgnani01";
$db = "MediKar";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
