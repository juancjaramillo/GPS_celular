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

// Obtener ubicaciones de la tabla de ubicaciones (reemplaza con tu propia estructura de tabla)
$sql = "SELECT latitud, longitud FROM ubicaciones";
$result = $conn->query($sql);

$ubicaciones = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ubicaciones[] = $row;
    }
}

// Devolver las ubicaciones en formato JSON
echo json_encode($ubicaciones);

$conn->close();
?>
