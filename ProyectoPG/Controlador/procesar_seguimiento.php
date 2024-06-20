<?php
include '../Productos/conexiPro.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Capturar IdProducto desde la URL (parámetro GET)
    if (isset($_POST['IdProducto'])) {
        $idProducto = $_POST['IdProducto'];
    } else {
        // Manejo de error si no se proporciona el IdProducto en el formulario
        die("Error: No se ha recibido el IdProducto desde el formulario.");
    }
    
    // Capturar los demás datos del formulario
    $nombreCriador = $_POST['nombreCriador'];
    $duracionCrianza = $_POST['duracionCrianza'];
    $alimentacionCuidados = $_POST['alimentacionCuidados'];
    $fechaRecoleccion = $_POST['fechaRecoleccion'];
    $recolectorResponsable = $_POST['recolectorResponsable'];
    $artesanoResponsable = $_POST['artesanoResponsable'];
    $metodoProcesamiento = $_POST['metodoProcesamiento'];
    $nombreHilador = $_POST['nombreHilador'];
    $fechaHilado = $_POST['fechaHilado'];
    $tipoHilado = $_POST['tipoHilado'];
    $fechaProduccion = $_POST['fechaProduccion'];
    $fechaLanzamiento = $_POST['fechaLanzamiento'];

    session_start();
    $id = $_SESSION['Id'];

    // Consulta SQL para insertar el seguimiento de producción en la fila existente de productos
    $sql = "UPDATE productos SET
                
                nombreCriador = '$nombreCriador',
                duracionCrianza = '$duracionCrianza',
                alimentacionCuidados = '$alimentacionCuidados',
                fechaRecoleccion = '$fechaRecoleccion',
                recolectorResponsable = '$recolectorResponsable',
                artesanoResponsable = '$artesanoResponsable',
                metodoProcesamiento = '$metodoProcesamiento',
                nombreHilador = '$nombreHilador',
                fechaHilado = '$fechaHilado',
                tipoHilado = '$tipoHilado',
                fechaProduccion = '$fechaProduccion',
                fechaLanzamiento = '$fechaLanzamiento'
            WHERE IdProducto = '$idProducto'";

    // Ejecutar la consulta y manejar el resultado
    if ($conexi->query($sql) === TRUE) {
        echo "Registro de seguimiento agregado exitosamente para el producto con IdProducto = $idProducto";
        header("Location: ../Productos/registro_seguimiento.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conexi->error;
    }

    // Cerrar la conexión
    $conexi->close();
}
?>
