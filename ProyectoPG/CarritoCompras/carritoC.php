<?php
session_start();
include "../Productos/conexiPro.php";

// Verificar si se ha recibido el parámetro id del producto
if (isset($_GET['id'])) {
    $idProducto = $_GET['id'];

    // Consultar el producto específico
    $query = "SELECT * FROM productos WHERE IdProducto = $idProducto";
    $resultado = $conexi->query($query);

    if ($resultado->num_rows > 0) {
        $producto = $resultado->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesCarrito.css">
    <script src="https://kit.fontawesome.com/a512d16f41.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="../Productos/imagenes_productos/<?= $producto->Foto ?>" class="card-img-top" alt="<?= $producto->Nombre ?>">
                
            </div>
        </div>
        <div class="col-md-6">

            
            <h2 class="text-center alert alert-secondary">Información del producto</h2>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= $producto->Nombre ?></h5>
                    <p class="card-text"><?= $producto->Descripcion ?></p>
                    <p class="card-text">$<?= $producto->Precio ?></p>
                    <p class="card-text">Cantidad disponible: <?= $producto->Cantidad ?></p>
                </div>
            </div>
           
            <!--agregar un formulario para dejar una reseña, mostrar comentarios, etc. -->

            <!-- Seguimiento de Producción -->
            
            <?php
            // Incluye el archivo de conexión y obtención de datos de seguimiento
            include "../Productos/conexiPro.php";

            // Verifica si se ha proporcionado el ID del producto
            if (isset($_GET['id'])) {
                $idProducto = $_GET['id'];
                // Consulta para obtener el seguimiento de producción del producto específico
                $sqlSeguimiento = $conexi->query("SELECT * FROM productos WHERE IdProducto = $idProducto");
                if ($sqlSeguimiento->num_rows > 0) {
                    while ($datosSeguimiento = $sqlSeguimiento->fetch_object()) {
                        // Aquí muestras los detalles del seguimiento de producción
                        ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Seguimiento de Producción del Producto</h5>
                                <p><strong>Nombre del Criador:</strong> <?= $datosSeguimiento->nombreCriador ?></p>
                                <p><strong>Duración de la Crianza:</strong> <?= $datosSeguimiento->duracionCrianza ?></p>
                                <p><strong>Alimentación y Cuidados:</strong> <?= $datosSeguimiento->alimentacionCuidados ?></p>
                                <p><strong>Fecha de Recolección:</strong> <?= $datosSeguimiento->fechaRecoleccion ?></p>
                                <p><strong>Recolector Responsable:</strong> <?= $datosSeguimiento->recolectorResponsable ?></p>
                                <p><strong>Artesano Responsable:</strong> <?= $datosSeguimiento->artesanoResponsable ?></p>
                                <p><strong>Método de Procesamiento:</strong> <?= $datosSeguimiento->metodoProcesamiento ?></p>
                                <p><strong>Nombre del Hilador:</strong> <?= $datosSeguimiento->nombreHilador ?></p>
                                <p><strong>Fecha de Hilado:</strong> <?= $datosSeguimiento->fechaHilado ?></p>
                                <p><strong>Tipo de Hilado:</strong> <?= $datosSeguimiento->tipoHilado ?></p>
                                <p><strong>Fecha de Producción:</strong> <?= $datosSeguimiento->fechaProduccion ?></p>
                                <p><strong>Fecha de Lanzamiento:</strong> <?= $datosSeguimiento->fechaLanzamiento ?></p>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    echo '<p class="text-center">No se encontraron registros de seguimiento para este producto.</p>';
                }
            } else {
                echo '<p class="text-center">No se ha especificado un producto.</p>';
            }
            ?>

            <div class="card-footer">
                    <a href="#" class="btn btn-success">Agregar a Cesta</a>
                    <a href="#" class="btn btn-warning">Comprar ahora</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</body>
</html>

<?php
    } else {
        echo "Producto no encontrado.";
    }
} else {
    echo "No se ha especificado un producto.";
}
?>
