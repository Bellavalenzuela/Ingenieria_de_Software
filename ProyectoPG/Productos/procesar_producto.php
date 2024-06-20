<?php

include('conexiPro.php');

if (!empty($_POST["registroProductos"])) {
    if (empty($_POST["Nombre"]) || empty($_POST["Descripcion"]) || empty($_POST["Precio"]) || empty($_POST["Cantidad"]) || empty($_FILES["Foto"]["name"]) || empty($_POST["Categoria"])) {
        echo '<div class="alert">Uno de los campos está vacío</div>';
    } else {
        $nombrePro = mysqli_real_escape_string($conexi, $_POST['Nombre']);
        $descripcion = mysqli_real_escape_string($conexi, $_POST['Descripcion']);
        $precio = mysqli_real_escape_string($conexi, $_POST['Precio']);
        $cantidad = mysqli_real_escape_string($conexi, $_POST['Cantidad']);
        $foto = mysqli_real_escape_string($conexi, $_FILES['Foto']['name']);
        $categoria = mysqli_real_escape_string($conexi, $_POST['Categoria']);
        
        
        
        // Subir la imagen del producto al servidor
        $directorio_imagenes = "imagenes_productos/";
        $ruta_foto = $directorio_imagenes . basename($_FILES['Foto']['name']);
        move_uploaded_file($_FILES['Foto']['tmp_name'], $ruta_foto);

        session_start();
        
            $id= $_SESSION['Id'];
        // Insertar datos en la tabla de productos
        $sql = "INSERT INTO productos (IdProductor,Nombre, Descripcion, Precio, Cantidad ,Foto, IdCategoria) 
                VALUES ($id,'$nombrePro', '$descripcion', '$precio','$cantidad' ,'$foto', '$categoria')";

        if ($conexi->query($sql) === TRUE) {
            echo "Producto registrado correctamente";
            header("Location: nuevoModal.php");
        } else {
            echo "Error al registrar producto: " . $conexi->error;
        }
    }

}
?>


