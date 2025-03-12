<?php
session_start();
include 'koneksi.php';

// Simulasi user login (harusnya dari session login)
$id_user = 1;

// Ambil semua data pembelian berdasarkan user
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_user = '$id_user'");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Riwayat Pembelian</h2>
        <hr>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php while ($pecah = $ambil->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $pecah['tanggal_pembelian']; ?></td>
                    <td>Rp <?php echo number_format($pecah['total'], 0, ',', '.'); ?></td>
                    <td><?php echo isset($pecah['status_pembelian']) ? $pecah['status_pembelian'] : 'Selesai'; ?></td>
                    <td>
                        <a href="nota.php?id_pembelian=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-primary btn-sm">Lihat Nota</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <a href="../../../index.php" class="btn btn-primary">Kembali Belanja</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
