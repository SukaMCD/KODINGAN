<?php
session_start();
include 'koneksi.php';

// Ambil id pembelian dari URL
$id_pembelian = $_GET['id_pembelian'];

// Ambil data pembelian
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian = '$id_pembelian'");
$detail = $ambil->fetch_assoc();

// Cek apakah user boleh akses nota ini
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
    <style>
        body {
            background-color: #f8f9fa;
        }
        .nota-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-weight: 700;
        }
        th {
            background-color: #f1f3f5;
        }
        @media print {
            .btn {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="nota-container mx-auto">
            <h2 class="text-center mb-4">Nota Pembelian</h2>
            <hr>

            <!-- Tabel Info Pembelian -->
            <table class="table table-bordered mb-4">
                <tbody>
                    <tr>
                        <th style="width: 30%;">No. Pembelian</th>
                        <td><?php echo $detail['id_pembelian']; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Pembelian</th>
                        <td><?php echo $detail['tanggal_pembelian']; ?></td>
                    </tr>
                    <tr>
                        <th>Total Pembelian</th>
                        <td>Rp <?php echo number_format($detail['total'], 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Status Pembelian</th>
                        <td><strong><?php echo ucfirst($detail['status_pembelian']); ?></strong></td>
                    </tr>
                    <tr>
                        <th>Alamat Pengiriman</th>
                        <td><?php echo nl2br(htmlspecialchars($detail['alamat_pengiriman'])); ?></td>
                    </tr>
                    <tr>
                        <th>Metode Pengiriman</th>
                        <td><?php echo htmlspecialchars($detail['metode_pengiriman']); ?></td>
                    </tr>
                    <tr>
                        <th>Metode Pembayaran</th>
                        <td><?php echo htmlspecialchars($detail['metode_pembayaran']); ?></td>
                    </tr>
                </tbody>
            </table>

            <!-- Tabel Produk -->
            <h5 class="fw-bold mb-3">Detail Produk</h5>
            <table class="table table-striped table-bordered">
                <thead class="table-primary text-center">
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
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($pecah['nama_barang']); ?></td>
                        <td class="text-end">Rp <?php echo number_format($pecah['harga'], 0, ',', '.'); ?></td>
                        <td class="text-center"><?php echo $pecah['jumlah']; ?></td>
                        <td class="text-end">Rp <?php echo number_format($pecah['sub_total'], 0, ',', '.'); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

            <!-- Tombol -->
            <div class="d-flex justify-content-between mt-4">
                <a href="../../../index.php" class="btn btn-primary">Kembali Belanja</a>
                <button onclick="window.print();" class="btn btn-success">Cetak Nota</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
