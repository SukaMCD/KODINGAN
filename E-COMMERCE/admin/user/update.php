<?php
include 'koneksi.php';

$id = $_POST['id'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$level = $_POST['level'];

mysqli_query($koneksi,"update user set email='$email', username='$username', pass='$pass', level='$level' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>  