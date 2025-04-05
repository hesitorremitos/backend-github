<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'backend10';
$port = 3306; // Opcional si se cambio el puerto por defecto

$connextion = new mysqli($host, $user, $password, $database, $port);

// Si la conexion se realiza, mostrara este mensaje
echo "Conexion realizada con exito<br>";