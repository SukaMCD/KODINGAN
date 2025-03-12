<?php
session_start();
include 'koneksi.php';

// Ambil id pembelian dari URL
$id_pembelian = $_GET['id_pembelian'];

// Ambil data pembelian
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian = '$id_pembelian'");
$detail = $ambil->fetch_assoc();

// Cek apakah user boleh akses nota ini (opsional)
$id_user = 1; // Simulasi user login
if ($detail['id_user'] != $id_user) {
    echo "<script>alert('Maaf, kamu gak boleh lihat nota orang lain.');</script>";
    echo "<script>location='riwayat.php';</script>";
    exit();
}

// Ambil data produk yang dibeli
$produk = $koneksi->query("SELECT * FROM pembelian_produk JOIN produk 
            ON pembelian_produk.id_produk = produk.id
            WHERE pembelian_produk.id_pembelian = '$id_pembelian'");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nota Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Nota Pembelian</h2>
        <hr>

        <!-- Info Pembelian -->
        <div class="mb-4">
            <h5>No. Pembelian: <?php echo $detail['id_pembelian']; ?></h5>
            <p>Tanggal: <?php echo $detail['tanggal_pembelian']; ?></p>
            <p>Total: Rp <?php echo number_format($detail['total'], 0, ',', '.'); ?></p>
        </div>

        <!-- Tabel Produk -->
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php while ($pecah = $produk->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $pecah['nama_barang']; ?></td>
                    <td>Rp <?php echo number_format($pecah['harga'], 0, ',', '.'); ?></td>
                    <td><?php echo $pecah['jumlah']; ?></td>
                    <td>Rp <?php echo number_format($pecah['sub_total'], 0, ',', '.'); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Tombol -->
        <div class="mt-4">
            <a href="../../../index.php" class="btn btn-primary">Kembali Belanja</a>
            <button onclick="window.print();" class="btn btn-success">Cetak Nota</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
