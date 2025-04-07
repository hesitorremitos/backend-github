<?php

$id = $_POST['id_user'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password= $_POST['password'];

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "backend";


$connection = mysqli_connect($host,$user,$pass,$db);

$query = "SELECT * FROM users WHERE id = $id";
$response = mysqli_query($connection, $query);

$num_rows = mysqli_num_rows($response);

if ($num_rows != 1 ){
    echo "No existe el id $id";
}else{
    $query= "UPDATE users
    SET name='".$name."',
    age='".$age."',
    email='".$email."',
    password='".$password."'
    WHERE id =".$id;
    $response= mysqli_query($connection,$query);
    echo "EL id $id fue modificado correctamente";
}
