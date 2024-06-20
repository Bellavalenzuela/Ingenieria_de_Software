<?php
// Establecer los detalles de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Contraseña de tu base de datos, si la hay
$dbname = "dbproyecto";

// Crear la conexión
$conexi = new mysqli($servername, $username, $password, $dbname);
$conexi->set_charset("utf8");
// Verificar la conexión
if ($conexi->connect_error) {
    die("Error de conexión: " . $conexi->connect_error);
} 
?>
