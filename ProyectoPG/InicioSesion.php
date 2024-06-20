<?php
    session_start();
    include('conexion.php');


    if(isset($_POST['Usuario']) && isset($_POST['Clave'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Usuario = validate($_POST['Usuario']);
        $Clave = validate($_POST['Clave']);

        if (empty($Usuario)){
            header("Location: index.php?error=El usuario Es Requerido");
            exit();
        }elseif (empty($Clave)) {
            header("Location: index.php?error=La Clave Es Requerida");
            exit();
        }else{
            //$Clave = md5($Clave);
            //$Clave = password_hash($Clave, PASSWORD_DEFAULT);

            $Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Clave = '$Clave'";
            $result = mysqli_query($conexion, $Sql);


            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['Usuario'] === $Usuario && $row['Clave'] === $Clave) {
                    $_SESSION['Usuario'] = $row['Usuario'];
                    $_SESSION['Nombres'] = $row['Nombres'];
                    $_SESSION['Id'] = $row['Id'];
                    $_SESSION['Tipo_Usuario'] = $row['Tipo_Usuario'];
                    

                    header("Location: inicio.php");
                    exit();
                }else{
                    header("Location: index.php?error=El usuario o la clave son incorrectas");
                    exit();
                }
            }else{
                header("Location: index.php?error=El usuario o la clave son incorrectas");
                exit();
            }
            
        }

    } else{
        header("Location: index.php");
        exit();
    }

?>