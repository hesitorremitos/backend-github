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
    <style>
        td {
            border: 1px solid black;
            padding: 5px;
        }
        
    </style>
</head>
<body>
    <h1>Lista de usuarios</h1>
    <table>
        <!-- Titulos de la tabla -->
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contraseña</th>
        </tr>
    <?php
    // Hacemos un recorrido por los resultados de la consulta
    while ($user = $response->fetch_assoc()) {
        // Mostramos los resultados
        echo "<tr>";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['password']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>