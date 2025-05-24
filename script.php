<?php
// Datos de conexión
$host = "localhost";
$user = "root";
$password = "Omgnani01";
$database = "medikar";

// Conectar
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$domicilio = $_POST['domicilio'];

// Insertar datos
$sql = "INSERT INTO paciente (nombre, sexo, fecha_nacimiento, domicilio) 
        VALUES ('$nombre', '$sexo', '$fecha_nacimiento', '$domicilio')";

if ($conn->query($sql) === TRUE) {
    echo "Paciente registrado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
