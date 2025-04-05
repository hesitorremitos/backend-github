<?php
// * La forma correcta de crear una conexion

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'backend10';
$port = 3306; // Opcional si se cambio el puerto por defecto

// TODO Para evitar errores en pantalla, se recomienda usar try-catch
// - No se debe mostrar errores. 
try{
    $connection = new mysqli($host, $user, $password, $database, $port);
    // Si la conexion se realiza, mostrara este mensaje
    echo "Conexion realizada con exito<br>";
}catch(Exception $e){
    // Si la conexion no se realiza, mostrara este mensaje
    echo "Error de conexion: " . $e->getMessage() . "<br>";
}
