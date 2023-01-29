<?php
if (empty($_POST)) {
    echo "No data received from the JavaScript file.";
    return;
}

if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['role'])) {
    echo "Required data not received.";
    return;
}

require_once "../../config.php";


header("HTTP/1.1 204 No Content");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$role = $_POST['role'];

editUser($id, $email, $name, $role, $db);

function editUser($id, $email, $name, $role, $db)
{
    $edit_stmt = mysqli_prepare($db, "UPDATE users SET email=?, name=?, role=?, WHERE id=?  (id, email, name, pass, role) VALUES (NULL, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($edit_stmt, 'sssi', $email, $name, $role, $id);
    mysqli_stmt_execute($edit_stmt);
}

header("Location: ".$_SERVER['HTTP_REFERER']);
exit;
