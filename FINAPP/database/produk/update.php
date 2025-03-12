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

    move_uploaded_file($tmp_name, $folder.$gambar_produk);
} else {
    $gambar_produk = $gambar_lama;
}

mysqli_query($koneksi, "UPDATE produk SET nama_barang='$nama_barang', deskripsi='$deskripsi', stok='$stok', kategori='$kategori', harga='$harga', gambar_produk='$gambar_produk' WHERE id='$id'");

header("Location: index.php");
exit();
?>
