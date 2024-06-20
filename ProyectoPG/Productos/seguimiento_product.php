<?php
    session_start();
     $idProductor= $_SESSION['Id'];
     
                   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento de Producción</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a512d16f41.js" crossorigin="anonymous"></script>
</head>
<body>

    <h1 class="text-center p-4">Seguimiento de Producción</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form class="col-md-6 p-3" action="../Controlador/procesar_seguimiento.php" method="POST">

                <h2 class="text-center alert alert-secondary">Proceso de Producción</h2>

                <!-- Crianza -->
                <div class="mb-3">
                    <label for="nombreCriador" class="form-label">Nombre del Criador</label>
                    <input type="text" class="form-control" id="nombreCriador" name="nombreCriador" required>
                </div>
                <div class="mb-3">
                    <label for="duracionCrianza" class="form-label">Duración de la Crianza</label>
                    <input type="text" class="form-control" id="duracionCrianza" name="duracionCrianza" required>
                </div>
                <div class="mb-3">
                    <label for="alimentacionCuidados" class="form-label">Alimentación y Cuidados</label>
                    <textarea class="form-control" id="alimentacionCuidados" name="alimentacionCuidados" rows="3" required></textarea>
                </div>

                <!-- Recolección de Fibra -->
                <div class="mb-3">
                    <label for="fechaRecoleccion" class="form-label">Fecha de Recolección</label>
                    <input type="date" class="form-control" id="fechaRecoleccion" name="fechaRecoleccion" required>
                </div>
                <div class="mb-3">
                    <label for="recolectorResponsable" class="form-label">Recolector Responsable</label>
                    <input type="text" class="form-control" id="recolectorResponsable" name="recolectorResponsable" required>
                </div>

                <!-- Procesamiento de la Fibra -->
                <div class="mb-3">
                    <label for="artesanoResponsable" class="form-label">Artesano Responsable</label>
                    <input type="text" class="form-control" id="artesanoResponsable" name="artesanoResponsable" required>
                </div>
                <div class="mb-3">
                    <label for="metodoProcesamiento" class="form-label">Método de Procesamiento</label>
                    <select name="metodoProcesamiento" id="metodoProcesamiento" class="form-select" required>
                        <option value="" disabled selected>Seleccione un método</option>
                        <option value="Manual">Manual</option>
                        <option value="Máquina">Máquina</option>
                    </select>
                </div>

                <!-- Hilado -->
                <div class="mb-3">
                    <label for="nombreHilador" class="form-label">Nombre del Hilador</label>
                    <input type="text" class="form-control" id="nombreHilador" name="nombreHilador" required>
                </div>
                <div class="mb-3">
                    <label for="fechaHilado" class="form-label">Fecha de Hilado</label>
                    <input type="date" class="form-control" id="fechaHilado" name="fechaHilado" required>
                </div>
                <div class="mb-3">
                    <label for="tipoHilado" class="form-label">Tipo de Hilado</label>
                    <select name="tipoHilado" id="tipoHilado" class="form-select" required>
                        <option value="" disabled selected>Seleccione un tipo</option>
                        <option value="Manual">Manual</option>
                        <option value="Automático">Automático</option>
                    </select>
                </div>

                <!-- Fecha de Producción y Lanzamiento del Producto Final -->
                
                <div class="mb-3">
                    <label for="fechaProduccion" class="form-label">Fecha de Producción</label>
                    <input type="date" class="form-control" id="fechaProduccion" name="fechaProduccion" required>
                </div>
                <div class="mb-3">
                    <label for="fechaLanzamiento" class="form-label">Fecha de Lanzamiento</label>
                    <input type="date" class="form-control" id="fechaLanzamiento" name="fechaLanzamiento" required>
                </div>

                <a href="registro_seguimiento.php" class="btn btn-secondary mb-3">Registro de Seguimiento de producción</a>

                <input type="hidden" name="IdProducto" value="<?= $_GET['id'] ?>">
            
                <input type="submit" class="btn btn-primary" value="Ingresar Seguimiento" name="registroSeguimiento">
                
                
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
