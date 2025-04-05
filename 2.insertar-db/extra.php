<?php

// Datos de la BD
$host = "localhost";
$user = "root";
$pass = "";
$db = "backend";

// Crear la conexion
$connection =  new mysqli($host, $user, $pass, $db);
echo "Conectado correctamente <br>";

// Datos a insertar
$name = "Hector Josue";
$age = 22;
$email = "example@gmail.com";
$password = "11234";

// Consulta
// ! Se puso error intencional para probar la excepcion
$query = "INSERT INTO users (name_error, age, email, password) VALUES ('$name', $age, '$email', '$password')";

// Ejecutar la consulta
try{
    $result = $connection->query($query);
    echo "Usuario insertado correctamente <br>";
} catch (Exception $e) {
    echo "Error al insertar el usuario: " . $e->getMessage() . "<br>";
}