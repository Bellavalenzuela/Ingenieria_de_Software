<?php
// Configuración de la base de datos
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $dbname = "dbproyecto";

// Crear conexión
$con = new mysqli($localhost, $user, $password, $dbname);

// Verificar conexión
if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}else{
    echo "Conexion exitosa";
}

?>