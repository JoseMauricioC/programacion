<?php
    $con = new mysqli("localhost", "root", "", "bd_repaso");

    if($con->connect_errno){
        echo "Error al conectar a la base de datos";
        exit();
    }
?>