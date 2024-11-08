<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $db->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)")
       ->execute([$username, $password, $email]);
    header("Location: login.php");
}
?>
