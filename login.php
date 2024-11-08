<?php
session_start();
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $db->prepare("SELECT * FROM users WHERE username = ?");
    $user->execute([$username]);
    $user = $user->fetch();
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
    }
}
?>
