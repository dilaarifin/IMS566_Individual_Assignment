<?php
session_start();

$default_user = ["username" => "admin", "password" => "123"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $default_user['username'] && $password === $default_user['password']) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.html");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>
