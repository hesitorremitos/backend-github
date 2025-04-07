<?php

$con = new mysqli(
    'localhost',
    'root',
    '',
    'backend'
);

$res = $con->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Nombre
            </th>
            <th>
                Edad
            </th>
            <th>
                Editar
            </th>
            <th>Eliminar</th>
        </tr>
        <?php
        while($fila = $res->fetch_assoc()){
            echo "<tr>";
                echo "<td>".$fila['id']."</td>";
                echo "<td>".$fila['name']."</td>";
                echo "<td>".$fila['age']."</td>";
                echo "<td>";
                    echo "<a href=editarForm.php?id_user=".$fila['id'].">";
                        echo "Editar";
                    echo "</a>";
                echo "<td>";

                echo "<td>";
                    echo "<a href=eliminar.php?id_user=".$fila['id'].">";
                        echo "Eliminar";
                    echo "</a>";
                echo "<td>";

            echo "</tr>";
        }
        ?>
    </table>
    <a href="editar.php?id_user=1">Editar usuario 1 </a>
</body>
</html>
