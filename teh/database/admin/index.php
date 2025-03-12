<?php
// database/admin/index.php

session_start(); // Mulai sesi

// Periksa apakah pengguna sudah login dan memiliki level admin
if (!isset($_SESSION['user_id']) || $_SESSION['level'] !== 'admin') {
    header("Location: ../../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../asset/teh.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Ini adalah halaman dashboard admin.</p>
    <a href="../../logout.php">Logout</a>
</body>
</html>