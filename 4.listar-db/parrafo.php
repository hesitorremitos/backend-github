<?php
// * Pudemos escribir php en bloques separados por etiquetas de apertura y cierre
// Conexion
$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "backend"
);

$response = $conexion->query(
    "SELECT * FROM users"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas con POO</title>
</head>
<body>
    <h1>Lista de usuarios</h1>
    <?php
    // Hacemos un recorrido por los resultados de la consulta
    while ($user = $response->fetch_assoc()) {
        // Mostramos los resultados
        echo "<p>".$user['id']." - ".$user['name']."</p>";
        echo "<p>".$user['email']."</p>";
        echo "<p>".$user['password']."</p>";
        echo "<br>";
    }
    ?>
</body>
</html>