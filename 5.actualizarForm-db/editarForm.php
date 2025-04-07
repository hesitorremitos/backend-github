<?php

$id_user = $_GET['id_user'];

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "backend";

$connection = mysqli_connect($host,$user,$pass,$db);

$query = "SELECT * FROM users WHERE id = $id_user";

$response = mysqli_query($connection, $query);

$fila = mysqli_fetch_assoc($response);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    <!-- El action puede ser objetos.php o procedural.php -->
    <form action="editar.php" method="post">
    <div>
            <label for="id_user">ID</label>
            <input type="number" id="id_user" name="id_user"
            <?php
            echo "value=".$fila['id'];
            ?>
            >
        </div>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name"
            <?php
            echo "value = \"".$fila['name']."\"";
            ?>

            >
        </div>
        <div>
            <label for="age">Edad:</label>
            <input type="text" id="age" name="age" value = <?= "\"".$fila['age']."\"" ?> >
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"
            <?php
            echo "value = \"".$fila['email']."\"";

            ?>
            >
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password"
            <?php
            echo "value = \"".$fila['password']."\"";

            ?>
            >
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</body>
</html>