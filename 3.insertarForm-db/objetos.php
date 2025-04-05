<?php

// Conexion
$host = "localhost";
$user = "root";
$pass = "";
$db = "backend";

$conexion = new mysqli($host, $user, $pass, $db);

// Recuperando datos por POST
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insertando datos en la base de datos
$sql = "INSERT INTO users (name, age, email, password) VALUES ('$name', '$age', '$email', '$password')";
$result = $conexion->query($sql);

// Verificando si la inserción fue exitosa
if ($result) {
    echo "Usuario registrado exitosamente.";
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}