<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.html');
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.html');
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-white shadow px-6 py-5 flex justify-between items-center">
        <span class="font-semibold text-gray-800">Dashboard</span>
        <div class="flex items-center gap-4 text-sm">
            <span class="text-gray-600">Halo, <strong><?= htmlspecialchars($user) ?></strong></span>
            <a href="?logout=1" class="text-red-500 hover:underline" onclick="return confirm('mau keluar?')">Keluar</a>
        </div>
    </nav>

    <div class="max-w-2xl mx-auto mt-16 text-center">
        <h1 class="text-3xl font-bold text-gray-800">
            Selamat datang, <?= htmlspecialchars($user) ?>!
        </h1>
    </div>
</body>
</html>