<?php
require_once "../../config.php";


header("HTTP/1.1 204 No Content");


$id = $_POST['id'];
deleteUser($id,$db);

function deleteUser($id, $db)
{
    $del_stmt = mysqli_prepare($db, "DELETE FROM users WHERE id = ?");
    mysqli_stmt_bind_param($del_stmt, "i", $id);
    mysqli_stmt_execute($del_stmt);
}
exit;

