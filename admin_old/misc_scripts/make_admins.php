<?php
require_once "../../config.php";


// header("HTTP/1.1 204 No Content");

echo $email, $name, $password, $role;


$email = $_POST['inputEmail'];
$name = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$role = $_POST['inputRole'];

addUser($email, $name, $password, $role, $db);

function AddUser($email, $name, $password, $role, $db)
{
    $add_stmt = mysqli_prepare($db, "INSERT INTO users (id, email, name, pass, role) VALUES (NULL, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($add_stmt, 'ssss', $email, $name, $password, $role);
    mysqli_stmt_execute($add_stmt);
}
exit;

// INSERT INTO `users` (`id`, `email`, `name`, `pass`, `role`) VALUES (NULL, 'd', 'd', 'd', 'd');