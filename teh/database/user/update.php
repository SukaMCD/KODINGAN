<?php
include 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
// $email = $_POST['email'];
$password = $_POST['password']; // Password tidak di-hash
$level = $_POST['level'];

mysqli_query($koneksi, "UPDATE users SET username='$username', password='$password', level='$level' WHERE id='$id'");

header("Location: index.php");
exit();
?>
