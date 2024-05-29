<?php 
if(!empty($_POST["registro"])){
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["email"]) or empty($_POST["tipo_usuario"]) or empty($_POST["usuario"]) or empty($_POST["clave"]) or empty($_POST["rclave"])) {
        echo '<div class="alerta">Uno de los campos esta vacio</div>';
    }else {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $email=$_POST["email"];
        $tipo_usuario=$_POST["tipo_usuario"];
        $NoUsuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $rclave=$_POST["rclave"];
        //$sql = $conexionR->query("INSERT INTO usuarios (Nombres, Apellidos, Email, Tipo_Usuario, Usuario, Clave, RClave) VALUES ('$nombre', '$apellido', '$email', '$tipo_usuario', '$NoUsuario', '$clave', '$rclave')");

        if($clave !== $rclave){
            echo '<div class="alerta">Las claves no coinciden</div>';
        }else{
            $sql = $conexionR->query("INSERT INTO usuarios (Nombres, Apellidos, Email, Tipo_Usuario, Usuario, Clave, RClave) VALUES ('$nombre', '$apellido', '$email', '$tipo_usuario', '$NoUsuario', '$clave', '$rclave')");

            if ($sql==1){
                echo '<div class="success">Usuario registrado correctamente</div>';
            }else {
                echo '<div class="alerta">Error al registrar</div>';
                
            }
        }
        

    }
}

?>

