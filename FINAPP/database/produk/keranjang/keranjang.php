<?php
include 'koneksi.php';
session_start();

$id = $_GET['id'];

if (isset($_SESSION['keranjang'][$id])) {
    $_SESSION['keranjang'][$id] += 1;
} else {
    $_SESSION['keranjang'][$id] = 1;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

echo"<script>alert('Produk berhasil masuk ke keranjang')</script>";
echo"<script>location='tampil_keranjang.php'</script>";
?>
