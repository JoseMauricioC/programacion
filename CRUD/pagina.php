<?php
include 'conexion.php';
$sql = "SELECT * FROM profesiones";
$resultado=$con->query($sql);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="crear.php" method="post">
            <h1>Crear Profesion</h1>

            Nombre Profesion: <input type="text" name="profesion">

            <input type="submit" value="Crear">

            <!-- Nombre:<input type="text">
            Apellido:<input type="text">
            Fecha Nacimiento:<input type="text">
            Sexo:<input type="text">
            Telefono:<input type="text">
            Direccion:<input type="text">
            Profesion:<input type="text"> -->
        </form>
    </div>
    <hr>
    <div>
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
                <td><a href="">editar</a> <a href="">eliminar</a></td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>