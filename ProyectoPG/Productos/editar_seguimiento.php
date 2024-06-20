<?php
include "../Productos/conexiPro.php";

if (!empty($_GET["id"])) {
    $IdRecogerSeguimiento = $_GET["id"];

    $sql = $conexi->query("SELECT * FROM productos WHERE IdProducto = $IdRecogerSeguimiento");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Seguimiento de Producción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .title-container {
            max-width: 70%; /* Ajusta el tamaño máximo del contenedor */
            margin: 20px auto; /* Centra el contenedor horizontalmente */
        }
        .form-container {
            max-width: 600px; /* Ajusta el tamaño máximo del formulario */
            margin: 0 auto; /* Centra el formulario horizontalmente */
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="title-container">
            <h1 class="text-center alert alert-secondary">Editar Seguimiento de Producción</h1>
        </div>
       

        <form class="col-8 p-3 m-auto" method="POST" enctype="multipart/form-data" action="../Controlador/modificar_seguimiento.php">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            
            <?php while ($datos = $sql->fetch_object()) { ?>
                <div class="mb-3">
                    <label for="nombreCriador" class="form-label">Nombre del Criador</label>
                    <input type="text" class="form-control" id="nombreCriador" name="nombreCriador" value="<?= htmlspecialchars($datos->nombreCriador) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="duracionCrianza" class="form-label">Duración de la Crianza</label>
                    <input type="text" class="form-control" id="duracionCrianza" name="duracionCrianza" value="<?= htmlspecialchars($datos->duracionCrianza) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="alimentacionCuidados" class="form-label">Alimentación y Cuidados</label>
                    <textarea class="form-control" id="alimentacionCuidados" name="alimentacionCuidados" rows="3" required><?= htmlspecialchars($datos->alimentacionCuidados) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="fechaRecoleccion" class="form-label">Fecha de Recolección</label>
                    <input type="date" class="form-control" id="fechaRecoleccion" name="fechaRecoleccion" value="<?= htmlspecialchars($datos->fechaRecoleccion) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="recolectorResponsable" class="form-label">Recolector Responsable</label>
                    <input type="text" class="form-control" id="recolectorResponsable" name="recolectorResponsable" value="<?= htmlspecialchars($datos->recolectorResponsable) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="artesanoResponsable" class="form-label">Artesano Responsable</label>
                    <input type="text" class="form-control" id="artesanoResponsable" name="artesanoResponsable" value="<?= htmlspecialchars($datos->artesanoResponsable) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="metodoProcesamiento" class="form-label">Método de Procesamiento</label>
                    <select name="metodoProcesamiento" id="metodoProcesamiento" class="form-select" required>
                        <option value="" disabled>Seleccione un método</option>
                        <option value="Manual" <?= $datos->metodoProcesamiento == 'Manual' ? 'selected' : '' ?>>Manual</option>
                        <option value="Máquina" <?= $datos->metodoProcesamiento == 'Máquina' ? 'selected' : '' ?>>Máquina</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nombreHilador" class="form-label">Nombre del Hilador</label>
                    <input type="text" class="form-control" id="nombreHilador" name="nombreHilador" value="<?= htmlspecialchars($datos->nombreHilador) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="fechaHilado" class="form-label">Fecha de Hilado</label>
                    <input type="date" class="form-control" id="fechaHilado" name="fechaHilado" value="<?= htmlspecialchars($datos->fechaHilado) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tipoHilado" class="form-label">Tipo de Hilado</label>
                    <select name="tipoHilado" id="tipoHilado" class="form-select" required>
                        <option value="" disabled>Seleccione un tipo</option>
                        <option value="Manual" <?= $datos->tipoHilado == 'Manual' ? 'selected' : '' ?>>Manual</option>
                        <option value="Automático" <?= $datos->tipoHilado == 'Automático' ? 'selected' : '' ?>>Automático</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fechaProduccion" class="form-label">Fecha de Producción</label>
                    <input type="date" class="form-control" id="fechaProduccion" name="fechaProduccion" value="<?= htmlspecialchars($datos->fechaProduccion) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="fechaLanzamiento" class="form-label">Fecha de Lanzamiento</label>
                    <input type="date" class="form-control" id="fechaLanzamiento" name="fechaLanzamiento" value="<?= htmlspecialchars($datos->fechaLanzamiento) ?>" required>
                </div>
            <?php } ?>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="registro_seguimiento.php?id=<?= $_GET["id"] ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php } ?>
