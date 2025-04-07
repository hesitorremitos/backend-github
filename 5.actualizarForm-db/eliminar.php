<?php

$id = $_GET['id_user'];


$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "backend";


$connection = mysqli_connect($host,$user,$pass,$db);

$query = "SELECT * FROM users WHERE id = ?";

$stm = mysqli_prepare($connection,$query);
mysqli_stmt_bind_param($stm,'s',$id);
mysqli_stmt_execute($stm);
$response = mysqli_stmt_get_result($stm);

$num_rows = mysqli_num_rows($response);

if ($num_rows != 1 ){
    echo "No existe el id $id";
}else{
    $query= "DELETE FROM users where id=".$id;
    $response= mysqli_query($connection,$query);
    echo "Eliminado correctamente";
    header("Location: listar.php");
}
