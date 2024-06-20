<?php 

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    
    $sql=$conexi->query("DELETE FROM productos where IdProducto=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success">Producto eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
    
}

?>
