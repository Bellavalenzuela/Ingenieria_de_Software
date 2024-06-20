<?php
session_start();
if (isset($_SESSION['Id']) && isset($_SESSION['Usuario'])) {
    $tipo_usuario = isset($_SESSION['Tipo_Usuario']) ? $_SESSION['Tipo_Usuario'] : 'desconocido'; // Manejo de error

    // Redireccionar según el tipo de usuario
    if ($tipo_usuario === 'productor') {
        header('Location: Productores/productor.php');
        exit();
    } elseif ($tipo_usuario === 'cliente') {
        header('Location: Compradores/cliente.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/inicioEs.css">
    <title>Inicio</title>
    <style>
        .card { margin-top: 20px; }
        .welcome { margin-top: 20px; }
    </style>
</head>
<body>

</body>
</html>
<?php
} else {
    header('Location: index.php');
    exit();
}
?>
