<?php
session_start();
include 'koneksi.php';

// Simulasi user login (harusnya dari session login)
$id_user = 1;

// Ambil semua data pembelian berdasarkan user, terbaru di atas
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_user = '$id_user' ORDER BY id_pembelian DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .riwayat-container {
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
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="riwayat-container mx-auto">
            <h2 class="text-center mb-4">Riwayat Pembelian</h2>
            <hr>

            <table class="table table-striped table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1; 
                    while ($pecah = $ambil->fetch_assoc()) :
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td><?php echo date('d M Y', strtotime($pecah['tanggal_pembelian'])); ?></td>
                            <td>Rp <?php echo number_format($pecah['total'], 0, ',', '.'); ?></td>
                            <td>
                                <?php
                                $status = isset($pecah['status_pembelian']) ? $pecah['status_pembelian'] : 'Selesai';
                                $badge_class = 'secondary';
                                if ($status == 'pending') $badge_class = 'warning';
                                if ($status == 'proses') $badge_class = 'info';
                                if ($status == 'selesai') $badge_class = 'success';
                                if ($status == 'ditolak') $badge_class = 'danger';
                                ?>
                                <span class="badge bg-<?php echo $badge_class; ?>">
                                    <?php echo ucfirst($status); ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="nota.php?id_pembelian=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-sm btn-outline-primary">
                                    Lihat Nota
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

            <div class="d-flex justify-content-between mt-4">
                <a href="../../../index.php" class="btn btn-primary">Kembali Belanja</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
