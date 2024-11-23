<?php
include 'conexion.php';
    $profesion = $_POST['profesion'];

    $sql = "INSERT INTO profesiones(nombre_profesion) values ('$profesion')";

    $resultado=$con->query($sql);
?>
<p>Se inserto con exito</p>
<meta http-equiv='refresh' content="3; url=listar.php">