<?php
include 'koneksi.php';
$nama_barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$kualitas = $_POST['kualitas'];
$kemasan = $_POST['kemasan'];
$gambar_produk = $_FILES['gambar_produk']['name'];

// Cek jika ada gambar produk
if ($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $x = explode('.', $gambar_produk);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar_produk;

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);

        // Jalankan query INSERT
        $query = "INSERT INTO produk (nama_barang, deskripsi, stok, kategori, harga, kualitas, kemasan, gambar_produk) VALUES ('$nama_barang', '$deskripsi', '$stok', '$kategori', '$harga', '$kualitas', '$kemasan', '$nama_gambar_baru')";

        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
    }
} else {
    $query = "INSERT INTO produk (nama_barang, deskripsi, stok, kategori, harga, kualitas, kemasan, gambar_produk) VALUES ('$nama_barang', '$deskripsi', '$stok', '$kategori', '$harga', '$kualitas', '$kemasan', null)";

    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }
}
