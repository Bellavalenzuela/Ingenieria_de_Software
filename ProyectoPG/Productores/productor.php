<?php
session_start();
if (isset($_SESSION['Id']) && isset($_SESSION['Usuario'])) {
    $tipo_usuario = isset($_SESSION['Tipo_Usuario']) ? $_SESSION['Tipo_Usuario'] : 'desconocido'; // Manejo de error
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Perfil del Usuario</title>
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px;
            background-color: #343a40;
            color: white;
            width: 250px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .main-content {
            margin-left: 270px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center">
            <img src="path/to/user/profile/image.jpg" alt="Profile Image" class="profile-img">
            
            <h3><?php echo htmlspecialchars($_SESSION['Nombres']); ?></h3>
            <p><?php echo htmlspecialchars($_SESSION['Usuario']); ?></p>
        </div>
        <hr>
        <a href="../indice.html">Home</a>
        <a href="productor.php">Perfil</a>
        <a href="settings.php">Configuraciones</a>
        <a href="../Productos/nuevoModal.php">Registrar productos</a>
        <!--<a href="../CatalogoPro/Catalogo.php">Catálogo</a>-->
        <a href="../CerrarSesion.php" class="btn btn-danger mt-4">Cerrar Sesión</a>
    </div>

    <div class="main-content">
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
