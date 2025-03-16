<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$gambar_lama = $_POST['gambar_lama'];

if ($_FILES['gambar_produk']['name'] != "") {
    $gambar_produk = $_FILES['gambar_produk']['name'];
    $tmp_name = $_FILES['gambar_produk']['tmp_name'];
    $folder = "gambar/";

    move_uploaded_file($tmp_name, $folder . $gambar_produk);
} else {
    $gambar_produk = $gambar_lama;
}

$stmt = $koneksi->prepare("UPDATE produk SET 
    nama_barang=?, 
    deskripsi=?, 
    stok=?, 
    kategori=?, 
    harga=?, 
    gambar_produk=? 
    WHERE id=?");

$stmt->bind_param("ssisssi", $nama_barang, $deskripsi, $stok, $kategori, $harga, $gambar_produk, $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
?>
