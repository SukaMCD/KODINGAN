<?php
include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];

$gambar_produk = $_FILES['gambar_produk']['name'];
$tmp_name = $_FILES['gambar_produk']['tmp_name'];
$folder = "uploads/";

move_uploaded_file($tmp_name, $folder.$gambar_produk);

mysqli_query($koneksi, "INSERT INTO produk (nama_barang, deskripsi, stok, kategori, harga, gambar_produk) VALUES ('$nama_barang', '$deskripsi', '$stok', '$kategori', '$harga', '$gambar_produk')");

header("Location: index.php");
exit();
?>
