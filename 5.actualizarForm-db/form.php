<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    <!-- El action puede ser objetos.php o procedural.php -->
    <form action="objetos.php" method="post">
    <div>
            <label for="id_user">ID</label>
            <input type="number" id="id_user" name="id_user">
        </div>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="age">Edad:</label>
            <input type="text" id="age" name="age">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</body>
</html>