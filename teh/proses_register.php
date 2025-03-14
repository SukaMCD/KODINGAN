<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Pastikan username belum dipakai
    $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Username sudah terdaftar!');window.location='register.php';</script>";
    } else {
        // INSERT langsung tanpa hash password dan auto-level user
        $query = mysqli_query($koneksi, "INSERT INTO users (username, password, level) VALUES ('$username', '$password', 'user')");
        
        if ($query) {
            echo "<script>alert('Registrasi berhasil! Silakan login.');window.location='login.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal!');window.location='register.php';</script>";
        }
    }
} else {
    echo "<script>alert('Akses tidak sah!');window.location='register.php';</script>";
}
?>
