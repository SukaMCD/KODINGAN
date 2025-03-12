<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];

mysqli_query($koneksi,"update kategori set nama_kategori='$nama_kategori' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>  