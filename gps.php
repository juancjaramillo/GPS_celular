<?php
// Conectar a la base de datos (reemplaza con tus propios datos de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpscelular";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener datos GPS del POST
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$fecha = date("Y-m-d H:i:s");

// Insertar datos en la tabla de ubicaciones (reemplaza con tu propia estructura de tabla)
$sql = "INSERT INTO ubicaciones (latitud, longitud, fecha) VALUES ('$latitud', '$longitud', '$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "Datos de GPS almacenados correctamente.";
} else {
    echo "Error al almacenar datos de GPS: " . $conn->error;
}

$conn->close();
?>
