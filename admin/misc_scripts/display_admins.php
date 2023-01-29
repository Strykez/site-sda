<?php
// Query the db for user fields when loading the page
$user_data_result = $db->query("SELECT id, email, name, role FROM users");

$id = $_POST['id'];

deleteUser($id,$db);

function deleteUser($id, $db)
{
    // GOOD METHOD
    // $del_stmt = mysqli_prepare($db, "DELETE FROM table_name WHERE id = ?");
    // mysqli_stmt_bind_param($del_stmt, "i", $id);
    // mysqli_stmt_execute($del_stmt);

    // BAD METHOD BUT WORKS
}

//$db->close();

