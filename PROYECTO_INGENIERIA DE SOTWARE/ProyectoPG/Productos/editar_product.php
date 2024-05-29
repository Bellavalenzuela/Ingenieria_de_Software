<?php

include "conexiPro.php";

$IdRecoger=$_GET["id"];

$sql=$conexi->query("SELECT * FROM productos where IdProducto=$IdRecoger");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Editar</title>
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST" enctype="multipart/form-data">
                    <h4 class="text-center alert alert-secondary">Editar productos</h4>
                    <input type="hidden" name =id , value="<?= $_GET["id"]?>">
                    <?php
                    include "../Controlador/Modificar_product.php";

                    while($datos=$sql->fetch_object()){ ?>
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?= $datos->Nombre ?> " required>
                        </div>
                        <div class="mb-3">
                            <label for="Descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required><?= htmlspecialchars($datos->Descripcion) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="Precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="Precio" name="Precio" value="<?= htmlspecialchars($datos->Precio) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="Cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="Cantidad" name="Cantidad" value="<?= htmlspecialchars($datos->Cantidad) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="Categoria" class="form-label">Categoría</label>
                            <select name="Categoria" id="Categoria" class="form-select" value="<?= $datos->IdCategoria ?> " required>
                                <option value="" disabled selected>Seleccione una categoría</option>
                                <option value="1" <?= $datos->IdCategoria == 1 ? 'selected' : '' ?>>Prendas de Vestir</option>
                                <option value="2" <?= $datos->IdCategoria == 1 ? 'selected' : '' ?>>Accesorios</option>
                                <option value="3" <?= $datos->IdCategoria == 1 ? 'selected' : '' ?>>Hogar</option>
                                <option value="4" <?= $datos->IdCategoria == 1 ? 'selected' : '' ?>>Hilos y Fibras</option>
                                <option value="5" <?= $datos->IdCategoria == 1 ? 'selected' : '' ?>>Productos Especiales</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Foto" class="form-label">Imagen del producto</label>
                            <input type="file" class="form-control" id="Foto" name="Foto" accept="image/jpg">
                        </div>

                    <?php }
                    ?>
                   

                    <input type="submit" class="btn btn-primary" value="Modificar producto" name="registroProductos">
    </form>
</body>
</html>