<?php

    $conexionR=new mysqli("localhost","root","","dbproyecto","3306");
    $conexionR->set_charset("utf8");

    if(!$conexionR){
        echo "Conexion fallida";
    }
?>