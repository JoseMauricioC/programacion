<?php
include 'conexion.php';

$sql = "SELECT *FROM profesiones";
$resultado=$con->query($sql);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="lista_profesiones">
        <h1>Lista de Profesiones</h1>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre Profesion</th>
                <th>Acciones</th>
            </tr>
            <?php while($fila=$resultado->fetch_assoc()) {?>
            <tr>
                <td><?php echo $fila['id'];?></td>
                <td><?php echo $fila['nombre_profesion'];?></td>
                <td><a id="editar" href="">Editar</a> <a id="eliminar" href="">Eliminar</a></td>
            </tr>
            <?php }?>
        </table>

        <a id="insertar" href="form_insertar.html">Insertar</a>
    </div>
</body>
</html>