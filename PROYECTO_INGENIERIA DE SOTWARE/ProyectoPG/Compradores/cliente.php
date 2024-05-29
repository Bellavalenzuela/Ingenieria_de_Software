<?php
session_start();
if (isset($_SESSION['Id']) && isset($_SESSION['Usuario'])) {
    $tipo_usuario = isset($_SESSION['Tipo_Usuario']) ? $_SESSION['Tipo_Usuario'] : 'desconocido'; // Manejo de error
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="cliente.css">
    <title>Inicio</title>
    <style>
        .card { margin-top: 20px; }
        .welcome { margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="welcome">Bienvenido, <?php echo htmlspecialchars($_SESSION['Nombres']); ?></h1>
            <a href="../CerrarSesion.php" class="btn btn-danger">Cerrar Sesión</a>
        </div>

        <div class="card">
            <div class="card-header">
                Perfil del Usuario
            </div>
            <div class="card-body">
                <h5 class="card-title">Información del Usuario</h5>
                <p class="card-text"><strong>Nombre de Usuario:</strong> <?php echo htmlspecialchars($_SESSION['Usuario']); ?></p>
                <p class="card-text"><strong>Nombres:</strong> <?php echo htmlspecialchars($_SESSION['Nombres']); ?></p>
                <p class="card-text"><strong>Tipo de Usuario:</strong> <?php echo htmlspecialchars($tipo_usuario); ?></p>
                <!-- Contenido específico para cada tipo de usuario -->
                <?php if ($tipo_usuario === 'cliente'): ?>
                    <p class="card-text">Contenido específico para Clientes...</p>
                <?php elseif ($tipo_usuario === 'productor'): ?>
                    <p class="card-text">Contenido específico para Productores...</p>
                <?php else: ?>
                    <p class="card-text">Tipo de usuario no definido.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+fjzAq0EVoyQPeOXpG6Fx1UL6XQuB" crossorigin="anonymous"></script>
</body>
</html>
<?php
} else {
    header('Location: index.php');
    exit();
}
?>
