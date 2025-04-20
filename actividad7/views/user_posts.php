<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts de usuario</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Titulo</th>
            <th>Contenido</th>
            <td>ID Usuario</td>
        </tr>
        <?php
        foreach ($posts as $post){
            echo "<tr>";
                echo "<td>".$post['title']."</td>";
                echo "<td>".$post['content']."</td>";
                echo "<td>".$post['user_id']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>