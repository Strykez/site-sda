<?php
if (empty($_POST)) {
    echo "No data received from the JavaScript file.";
    return;
}

if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['role'])) {
    echo "Required data not received.";
    return;
}

$name = $_POST['name'];
$email = $_POST['email'];
$role = $_POST['role'];

?>
