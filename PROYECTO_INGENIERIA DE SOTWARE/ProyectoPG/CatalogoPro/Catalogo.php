<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
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

                // Consulta a la base de datos
                $query = mysqli_query($con,"SELECT * FROM productos");
                while($consulta = mysqli_fetch_array($query)) {
                    echo '<div class="card" style="width: 18rem;">
                    <img src="../Productos/imagenes_productos/'.$consulta['Foto'].'" class="card-img-top" alt="'.$consulta['Nombre'].'">
                    <div class="card-body">
                    <h5 class="card-title">'.$consulta['Nombre'].'</h5>
                    <p class="card-text">'.$consulta['Descripcion'].'</p>
                    <a href="#" class="btn btn-primary">$'.$consulta['Precio'].'</a>
                    </div>
                </div>';
                }
            ?>
        </div>
        <div class="mt-3">
            <a href="../Productores/productor.php" class="btn btn-primary">Ir a mi Usuario</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
