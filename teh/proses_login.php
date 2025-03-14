<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

if ($user) {
    if ($password == $user['password']) { // tanpa hash
        $_SESSION['user'] = $user;                 // seluruh data user
        $_SESSION['username'] = $user['username']; // cuma username buat navbar tampil

        if ($user['level'] == 'admin') {
            header('Location: admin/FINAPP/index.php');
        } else {
            header('Location: index.php');
        }

    } else {
        echo "Password salah!";
    }

} else {
    echo "Username nggak ketemu!";
}
?>
