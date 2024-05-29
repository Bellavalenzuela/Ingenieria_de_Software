<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="registrar.css">

    <title>Crear Cuenta</title>
</head>
<body>
    <div class="contenedor">
        <h1>Crear Cuenta</h1>
        <br>
        <form action="CrearCuenta.php" method="POST" class = "formulario">
            <h2 clas ="titulo">Registar</h2>
            <?php
                include("conexionR.php");
                include("../Controlador/Control_regist_usuario.php");
            ?>
            <div class="padre">
                <div class="nombre">
                    <label for ="">Nombres</label>
                    <input type="text" name="nombre">
                </div>
                <div class="apellido" >
                    <label for="">Apellidos</label>
                    <input type="text" name="apellido">
                </div>
                <div class= "email">
                    <label for="">Correo electronico</label>
                    <input type="email" name ="email">
                </div>
                <div class= "tipo_usuario">
                    <label for="">Tipo de usuario</label>
                    <select id="tipo_usuario" name = "tipo_usuario">
                        <option value="Cliente">Cliente</option>
                        <option value="Productor">Productor</option>
                    </select>
                    
                </div>
                <div class= "usuario">
                    <label for="">Nombre del usuario</label>
                    <input type="text" name ="usuario">
                </div>
                <div class= "clave">
                    <label for="">Clave</label>
                    <input type="password" placeholder="Clave" name ="clave">

                </div>
                <div class = "rclave">
                    <label for ="">Confirma la clave</label>
                    <input type="password" name="rclave">
                </div>
            </div>

            
            <input type="submit" class="button" value="Registrarse" name="registro">
            <a href="../index.php">Iniciar Sesión</a>
        </form>
    </div>
</body>
</html>
