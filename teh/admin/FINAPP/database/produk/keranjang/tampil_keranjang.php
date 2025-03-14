<?php
session_start();
include 'koneksi.php';

if (isset($_GET['tambah'])) {
    $id = $_GET['tambah'];
    $_SESSION['keranjang'][$id]++;
    header("Location: tampil_keranjang.php");
    exit;
}

if (isset($_GET['kurang'])) {
    $id = $_GET['kurang'];
    if ($_SESSION['keranjang'][$id] > 1) {
        $_SESSION['keranjang'][$id]--;
    } else {
        unset($_SESSION['keranjang'][$id]);
    }
    header("Location: tampil_keranjang.php");
    exit;
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    unset($_SESSION['keranjang'][$id]);
    header("Location: tampil_keranjang.php");
    exit;
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="pt-5 pb-5">
    <div class="container">
        <h2 class="mb-4">Keranjang Belanja</h2>

        <?php if (empty($_SESSION['keranjang']) || count($_SESSION['keranjang']) == 0): ?>
            <div class="alert alert-warning">Keranjang Anda kosong. <a href="../../../index.php" class="alert-link">Belanja sekarang!</a></div>
        <?php else: ?>

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Foto Produk</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $totalBelanja = 0;
                                foreach ($_SESSION['keranjang'] as $id => $jumlah):
                                    $ambil = $koneksi->query("SELECT * FROM produk WHERE id='$id'");
                                    $produk = $ambil->fetch_assoc();

                                    // Cek apakah produk ada di database
                                    if (!$produk) {
                                        unset($_SESSION['keranjang'][$id]);
                                        continue;
                                    }

                                    $subTotal = $produk['harga'] * $jumlah;
                                    $totalBelanja += $subTotal;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo htmlspecialchars($produk['nama_barang']); ?></td>
                                        <td>
                                            <img src="../gambar/<?php echo htmlspecialchars($produk['gambar_produk']); ?>" width="100" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <a href="tampil_keranjang.php?kurang=<?php echo $id; ?>" class="btn btn-danger btn-sm">-</a>
                                            <span class="mx-2"><?php echo $jumlah; ?></span>
                                            <a href="tampil_keranjang.php?tambah=<?php echo $id; ?>" class="btn btn-primary btn-sm">+</a>
                                        </td>
                                        <td>Rp <?php echo number_format($subTotal, 0, ',', '.'); ?></td>
                                        <td>
                                            <a href="tampil_keranjang.php?hapus=<?php echo $id; ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin hapus produk ini dari keranjang?');">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tombol Lanjut Belanja -->
                    <div class="d-flex justify-content-start mt-3">
                        <a href="../../../index.php" class="btn btn-primary">
                            <i class="bi bi-arrow-left-circle"></i> Lanjut Belanja
                        </a>
                    </div>

                    <!-- Total dan Checkout -->
                    <div class="row mt-0 pt-0" style="margin-top: -40px;"> <!-- DIUBAH -->
                        <div class="col-md-5 ms-auto">
                            <div class="border p-3 rounded bg-light">
                                <h5 class="mb-3">Total Belanja</h5>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Total:
                                        <span class="fw-bold text-primary">Rp <?php echo number_format($totalBelanja, 0, ',', '.'); ?></span>
                                    </li>
                                </ul>

                                <!-- Tombol Checkout -->
                                <div class="d-grid mt-3">
                                    <a href="checkout.php" class="btn btn-primary btn-lg">
                                        Checkout <i class="bi bi-cart-check"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

        <?php endif; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>