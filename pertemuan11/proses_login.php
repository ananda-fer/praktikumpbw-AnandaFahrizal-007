<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Ganti ini dengan query ke database
$valid_user = 'admin';
$valid_pass = 'admin';

if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['user'] = $username;
    header('Location: dashboard.php');
    exit;
}

header('Location: index.html?pesan=Username+atau+password+salah');
exit;