<?php

$koneksi = mysqli_connect("localhost","root","","crud");

if (mysqli_connect_errno()) {
    echo "koneksi Database Gagal : " . mysqli_connect_errno();
}

?>