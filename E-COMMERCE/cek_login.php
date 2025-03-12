<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$data = mysqli_query($koneksi, $query);

if ($data && mysqli_num_rows($data) > 0) {
    $user = mysqli_fetch_assoc($data);

    $_SESSION['username'] = $user['username'];

    if ($user['level'] === 'admin') {
        $_SESSION['level'] = 'admin';
        header("Location: admin/index.php");
    } else {
        $_SESSION['level'] = 'user';
        header("Location: user/homepage.html");
    }
    exit;
} else {
    $_SESSION['login_error'] = "Username atau password salah!";
    header("Location: index.php");
    exit;
}
