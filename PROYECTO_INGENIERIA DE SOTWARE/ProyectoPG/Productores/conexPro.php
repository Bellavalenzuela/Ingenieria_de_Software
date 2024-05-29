<?php
// Configuración de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbproyecto";

// Crear conexión
$conn = new mysqli($localhost, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}else{
    echo "Conexion exitosa";
}

?>