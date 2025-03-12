<?php
//koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];

// menginput data ke database
mysqli_query($koneksi,"insert into kategori values('$id','$nama_kategori')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>