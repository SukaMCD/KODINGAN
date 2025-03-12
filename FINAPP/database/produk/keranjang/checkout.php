<?php
session_start();
include 'koneksi.php';

// Cek apakah keranjang kosong
if (!isset($_SESSION['keranjang']) || empty($_SESSION['keranjang'])) {
    echo "<script>alert('Keranjang masih kosong, yuk belanja dulu!');</script>";
    echo "<script>location='../../../index.php';</script>";
    exit();
}

// Simulasi ID User (ganti dengan session user login kalian)
$id_user = 1; // Sesuaikan dengan sistem login kamu

// 1. Simpan ke tabel pembelian
$tanggal_pembelian = date('Y-m-d');
$total_belanja = 0;

// Hitung total belanja dulu
foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
    $ambil = $koneksi->query("SELECT * FROM produk WHERE id = '$id_produk'");
    $produk = $ambil->fetch_assoc();

    // Cek stok produk
    if ($produk['stok'] < $jumlah) {
        echo "<script>alert('Stok produk " . htmlspecialchars($produk['nama_barang']) . " tidak mencukupi.');</script>";
        echo "<script>location='tampil_keranjang.php';</script>";
        exit();
    }

    $sub_total = $produk['harga'] * $jumlah;
    $total_belanja += $sub_total;
}

// Insert data ke tabel pembelian
$koneksi->query("INSERT INTO pembelian (id_user, tanggal_pembelian, total) VALUES ('$id_user', '$tanggal_pembelian', '$total_belanja')");

// Ambil id_pembelian yang barusan diinput
$id_pembelian = $koneksi->insert_id;

// 2. Simpan produk yang dibeli & update stok
foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
    $ambil = $koneksi->query("SELECT * FROM produk WHERE id = '$id_produk'");
    $produk = $ambil->fetch_assoc();

    $sub_total = $produk['harga'] * $jumlah;

    // Masukin ke tabel pembelian_produk
    $koneksi->query("INSERT INTO pembelian_produk (id_pembelian, id_produk, jumlah, sub_total) VALUES ('$id_pembelian', '$id_produk', '$jumlah', '$sub_total')");

    // Update stok produk
    $stok_baru = $produk['stok'] - $jumlah;
    $koneksi->query("UPDATE produk SET stok = '$stok_baru' WHERE id = '$id_produk'");
}

// 3. Kosongkan keranjang
unset($_SESSION['keranjang']);

// 4. Redirect ke halaman nota atau pesan sukses
echo "<script>alert('Pembelian berhasil! Terima kasih :)');</script>";
echo "<script>location='nota.php?id_pembelian=$id_pembelian';</script>";
exit();
?>
