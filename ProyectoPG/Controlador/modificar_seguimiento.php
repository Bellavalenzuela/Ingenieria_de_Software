<?php
include "../Productos/conexiPro.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST["id"];
    $nombreCriador = $_POST["nombreCriador"];
    $duracionCrianza = $_POST["duracionCrianza"];
    $alimentacionCuidados = $_POST["alimentacionCuidados"];
    $fechaRecoleccion = $_POST["fechaRecoleccion"];
    $recolectorResponsable = $_POST["recolectorResponsable"];
    $artesanoResponsable = $_POST["artesanoResponsable"];
    $metodoProcesamiento = $_POST["metodoProcesamiento"];
    $nombreHilador = $_POST["nombreHilador"];
    $fechaHilado = $_POST["fechaHilado"];
    $tipoHilado = $_POST["tipoHilado"];
    $fechaProduccion = $_POST["fechaProduccion"];
    $fechaLanzamiento = $_POST["fechaLanzamiento"];

    // Preparar la consulta SQL para actualizar
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
            WHERE IdProducto = $id";

    // Ejecutar la consulta
    if ($conexi->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
        // Redirigir a la página de origen o a donde necesites
        header("Location: ../Productos/registro_seguimiento.php?id=$id");
        exit();
    } else {
        echo "Error al actualizar el registro: " . $conexi->error;
    }

    // Cerrar la conexión
    $conexi->close();
}
?>
