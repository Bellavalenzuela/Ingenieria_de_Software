<?php 

if (!empty($_POST["registroProductos"])) {
    if (!empty($_POST["Nombre"]) && !empty($_POST["Descripcion"]) && !empty($_POST["Precio"]) && !empty($_POST["Cantidad"]) && !empty($_POST["Categoria"])) {
        $id = $_POST["id"];
        $nombre = $_POST["Nombre"];
        $descripcion = $_POST["Descripcion"];
        $precio = $_POST["Precio"];
        $cantidad = $_POST["Cantidad"];
        $categoria = $_POST["Categoria"];
        $foto = $_FILES['Foto']['name'];
        

        // Subir la imagen del producto al servidor
        $directorio_imagenes = "imagenes_productos/";
        $ruta_foto = $directorio_imagenes . basename($_FILES['Foto']['name']);
        move_uploaded_file($_FILES['Foto']['tmp_name'], $ruta_foto);


        $sql = $conexi->query("UPDATE productos SET Nombre='$nombre', Descripcion='$descripcion', Precio=$precio, Cantidad=$cantidad, IdCategoria='$categoria', Foto='$foto' WHERE IdProducto=$id");

        if ($sql) {
            header("Location: ../Productos/nuevoModal.php");
        } else {
            echo "<div class='alert alert-danger'>Error al editar producto</div>";
        }

    } else {
        echo "<div class='alert alert-warning'>Campos vacíos</div>";
    }
}
?>
