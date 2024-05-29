<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a512d16f41.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro que deseas eliminar?");
            return respuesta;
        }
    </script>

    <h1 class="text-center p-3">Registro de productos</h1>
    <div class="container-fluid">
        <div class="row">
            <form class="col-md-4 p-3" action="procesar_producto.php" method="POST" enctype="multipart/form-data">
                <h2 class="text-center alert alert-secondary">Ingresar Nuevo Producto</h2>
                <?php
                include "conexiPro.php";
                include "procesar_producto.php";
                ?>

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                </div>
                <div class="mb-3">
                    <label for="Descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="Precio" name="Precio" required>
                </div>
                <div class="mb-3">
                    <label for="Cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="Cantidad" name="Cantidad" required>
                </div>

                <div class="mb-3">
                    <label for="Categoria" class="form-label">Categoría</label>
                    <select name="Categoria" id="Categoria" class="form-select" required>
                        <option value="" disabled selected>Seleccione una categoría</option>
                        <option value="1">Prendas de Vestir</option>
                        <option value="2">Accesorios</option>
                        <option value="3">Hogar</option>
                        <option value="4">Hilos y Fibras</option>
                        <option value="5">Productos Especiales</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Foto" class="form-label">Imagen del producto</label>
                    <input type="file" class="form-control" id="Foto" name="Foto" accept="image/jpg">
                </div>
                <input type="submit" class="btn btn-primary" value="Ingresar Producto" name="registroProductos">
            </form>

            
            <div class="col-8 p-4">
            <?php
            include "conexiPro.php";
            include "../Controlador/eliminar_product.php";
            ?>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">DESCRIPCIÓN</th>
                            <th scope="col">PRECIO</th>
                            <th scope="col">CANTIDAD</th>
                            <th scope="col">CATEGORIA</th>
                            <th scope="col">IMAGEN</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "conexiPro.php";
                        $sql=$conexi->query("SELECT * FROM productos");
                        while($datos=$sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->IdProducto ?></td>
                                <td><?= $datos->Nombre ?></td>
                                <td><?= $datos->Descripcion ?></td>
                                <td><?= $datos->Precio ?></td>
                                <td><?= $datos->Cantidad ?></td>
                                <td><?= $datos->IdCategoria ?></td>
                                <td><?= $datos->Foto ?></td>
                                <td>
                                    <a href="editar_product.php?id=<?= $datos->IdProducto ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="nuevoModal.php?id=<?= $datos->IdProducto ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                             </tr>

                        <?php }
                        ?>


                    </tbody>
                </table>
            </div>
                <div class="mt-3">
                    <a href="../Productores/productor.php" class="btn btn-primary">Ir a mi perfil</a>
                </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

