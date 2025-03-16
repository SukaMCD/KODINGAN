<?php
include'koneksi.php';

$id = $_POST ['id'];
$nama_kategori = $_POST ['nama_kategori'];

mysqli_query($koneksi, "insert into kategori values('$id','$nama_kategori')");

header("location:index.php")
?>