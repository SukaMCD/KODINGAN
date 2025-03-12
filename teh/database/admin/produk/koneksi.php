<?php

$koneksi = mysqli_connect("localhost","root","","leafly");

if (mysqli_connect_errno()) {
    echo "koneksi Database Gagal : " . mysqli_connect_errno();
}

?>