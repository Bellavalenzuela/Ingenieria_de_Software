<?php
session_start();
$idProductor = $_SESSION['Id'];

include "../Productos/conexiPro.php";

// Consulta para obtener los registros de seguimiento de producción para el productor actual
$sql = $conexi->query("SELECT * FROM productos WHERE IdProductor = $idProductor");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento de Producción - Registro de Seguimiento</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <h1 class="text-center py-4">Seguimiento de Producción - Registro de Seguimiento</h1>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID Producto</th>
                        <th scope="col">Nombre del Criador</th>
                        <th scope="col">Duración de la Crianza</th>
                        <th scope="col">Alimentación y Cuidados</th>
                        <th scope="col">Fecha de Recolección</th>
                        <th scope="col">Recolector Responsable</th>
                        <th scope="col">Artesano Responsable</th>
                        <th scope="col">Método de Procesamiento</th>
                        <th scope="col">Nombre del Hilador</th>
                        <th scope="col">Fecha de Hilado</th>
                        <th scope="col">Tipo de Hilado</th>
                        <th scope="col">Fecha de Producción</th>
                        <th scope="col">Fecha de Lanzamiento</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->IdProducto ?></td>
                            <td><?= $datos->nombreCriador ?></td>
                            <td><?= $datos->duracionCrianza ?></td>
                            <td><?= $datos->alimentacionCuidados ?></td>
                            <td><?= $datos->fechaRecoleccion ?></td>
                            <td><?= $datos->recolectorResponsable ?></td>
                            <td><?= $datos->artesanoResponsable ?></td>
                            <td><?= $datos->metodoProcesamiento ?></td>
                            <td><?= $datos->nombreHilador ?></td>
                            <td><?= $datos->fechaHilado ?></td>
                            <td><?= $datos->tipoHilado ?></td>
                            <td><?= $datos->fechaProduccion ?></td>
                            <td><?= $datos->fechaLanzamiento ?></td>
                            <td>
                                <a href="editar_seguimiento.php?id=<?= $datos->IdProducto ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a href="nuevoModal.php" class="btn btn-primary">Ir a registro de productos</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS y dependencias -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
