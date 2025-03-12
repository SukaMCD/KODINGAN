<?php
include 'Koneksi.php';

$id = $_GET ['id'];

mysqli_query($koneksi,"delete from produk where id='$id'");

header("location:Index.php");
?>