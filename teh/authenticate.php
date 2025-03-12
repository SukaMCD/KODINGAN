<?php
// authenticate.php

session_start(); // Mulai sesi

// Include koneksi database
require_once 'database/admin/koneksi.php';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari pengguna
$stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username");
$stmt->execute(['username' => $username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    // Jika login berhasil, simpan data pengguna ke session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['level'] = $user['level'];

    // Redirect berdasarkan level pengguna
    if ($user['level'] === 'admin') {
        header("Location: database/admin/index.php");
    } else {
        header("Location: database/user/index.php");
    }
    exit();
} else {
    // Jika login gagal
    echo "Username atau password salah.";
}
?>