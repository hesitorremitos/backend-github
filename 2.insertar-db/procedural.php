<?php

// Datos de la BD
$host = "localhost";
$user = "root";
$pass = "";
$db = "backend";

// Crear la conexion
$connection =  mysqli_connect($host, $user, $pass, $db);
echo "Conectado correctamente <br>";

// Datos a insertar
$name = "Hector Josue";
$age = 22;
$email = "example@gmail.com";
$password = "11234";

// Consulta
$query = "INSERT INTO users (name, age, email, password) VALUES ('$name', $age, '$email', '$password')";

// Ejecutar la consulta
$result = mysqli_query($connection, $query);
if ($result) {
    echo "Usuario insertado correctamente <br>";
} else {
    echo "Error al insertar el usuario: " . mysqli_error($connection) . "<br>";
}