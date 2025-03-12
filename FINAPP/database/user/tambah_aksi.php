<?php
include 'koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

$query = "INSERT INTO user (username, email, password, level) VALUES ('$username', '$email', '$password', '$level')";

if (mysqli_query($koneksi, $query)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
