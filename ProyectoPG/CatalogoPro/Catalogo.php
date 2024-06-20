<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        body {
                background-color: #F2C555  ; /* Cambia este valor al color deseado */
            }

        .card {
            margin: 10px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-img-top {
            width: 100%;
            height: 290px;
            object-fit: contain;
        }

        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Catálogo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Compradores/cliente.php">Mi Usuario</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Catalogo.php?categoria=1">Prendas de vestir</a></li>
                            <li><a class="dropdown-item" href="Catalogo.php?categoria=2">Accesorios</a></li>
                            <li><a class="dropdown-item" href="Catalogo.php?categoria=3">Hogar</a></li>
                            <li><a class="dropdown-item" href="Catalogo.php?categoria=4">Hilos y Fibra</a></li>
                            <li><a class="dropdown-item" href="Catalogo.php?categoria=5">Productos especiales</a></li>
                        </ul>
                    </li>
                </ul>

                 <!-- Carrito de compras -->
                 <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="../CarritoCompras/carritoC.php" class="nav-link cart-icon"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php 
                // Conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "dbproyecto";

                $con = new mysqli($servername, $username, $password, $dbname);

                // Verificar conexión
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }


                // Consulta base de productos
                $sql = "SELECT * FROM productos";

                // Verificar si se ha seleccionado una categoría
                if (isset($_GET['categoria'])) {
                    $categoria = $_GET['categoria'];
                    // Agregar filtro por categoría a la consulta SQL
                    $sql .= " WHERE IdCategoria = $categoria";
                }

                // Ejecutar consulta
                $query = mysqli_query($con, $sql);

                if (!$query) {
                    die("Error en la consulta: " . mysqli_error($con));
                }

                    // Mostrar productos
                while ($consulta = mysqli_fetch_array($query)) {
                    echo '<div class="col">
                            <div class="card h-100">
                                <img src="../Productos/imagenes_productos/' . $consulta['Foto'] . '" class="card-img-top" alt="' . $consulta['Nombre'] . '">
                                <div class="card-body">
                                    <h5 class="card-title">' . $consulta['Nombre'] . '</h5>
                                    <p class="card-text">' . $consulta['Descripcion'] . '</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">$' . $consulta['Precio'] . '</a>
                                    <a href="../CarritoCompras/CarritoC.php?id=' . $consulta['IdProducto'] . '" class="btn btn-success">Comprar</a>
                                </div>

                
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/a512d16f41.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
