<?php
/* Controlador de registro de usuario
    Recupera y muestra la lista de usuarios
*/

require_once '../models/User.php';
$user = new User();
$users = $user->getAll();
include '../views/user_list.php';
exit;