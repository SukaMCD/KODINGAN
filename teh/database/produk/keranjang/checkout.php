<?php
session_start();
include 'koneksi.php';

// Cek apakah keranjang kosong
if (!isset($_SESSION['keranjang']) || empty($_SESSION['keranjang'])) {
    echo "<script>alert('Keranjang masih kosong, yuk belanja dulu!');</script>";
    echo "<script>location='../../../index.php';</script>";
    exit();
}

$id_user = 1; // contoh user login, nanti tinggal ambil dari session login

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alamat_pengiriman = $_POST['alamat_pengiriman'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $metode_pengiriman = $_POST['metode_pengiriman'];

    $tanggal_pembelian = date('Y-m-d');
    $total_belanja = 0;

    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
        $ambil = $koneksi->query("SELECT * FROM produk WHERE id = '$id_produk'");
        $produk = $ambil->fetch_assoc();

        if ($produk['stok'] < $jumlah) {
            echo "<script>alert('Stok produk " . htmlspecialchars($produk['nama_barang']) . " tidak mencukupi.');</script>";
            echo "<script>location='tampil_keranjang.php';</script>";
            exit();
        }

        $sub_total = $produk['harga'] * $jumlah;
        $total_belanja += $sub_total;
    }

    $query = "INSERT INTO pembelian (id_user, tanggal_pembelian, total, alamat_pengiriman, metode_pembayaran, metode_pengiriman, status_pembelian)
              VALUES ('$id_user', '$tanggal_pembelian', '$total_belanja', '$alamat_pengiriman', '$metode_pembayaran', '$metode_pengiriman', 'pending')";
    $koneksi->query($query);

    $id_pembelian = $koneksi->insert_id;

    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
        $ambil = $koneksi->query("SELECT * FROM produk WHERE id = '$id_produk'");
        $produk = $ambil->fetch_assoc();

        $sub_total = $produk['harga'] * $jumlah;

        $koneksi->query("INSERT INTO pembelian_produk (id_pembelian, id_produk, jumlah, sub_total)
                        VALUES ('$id_pembelian', '$id_produk', '$jumlah', '$sub_total')");

        $stok_baru = $produk['stok'] - $jumlah;
        $koneksi->query("UPDATE produk SET stok = '$stok_baru' WHERE id = '$id_produk'");
    }

    unset($_SESSION['keranjang']);

    echo "<script>alert('Pembelian berhasil! Terima kasih :)');</script>";
    echo "<script>location='nota.php?id_pembelian=$id_pembelian';</script>";
    exit();

} else {
    // FORM FINAPP STYLE
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout | FinApp Style</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ionicons CDN buat icon -->
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6fa;
            margin: 0;
            padding: 0;
        }
        .checkout-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 25px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0px 4px 16px rgba(0,0,0,0.1);
        }
        .checkout-container h2 {
            text-align: center;
            color: #4e54c8;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 16px;
        }
        label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }
        textarea, select, input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 12px;
            font-size: 14px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 14px;
            background-color: #4e54c8;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #373fc8;
        }
        .icon-header {
            font-size: 40px;
            color: #4e54c8;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="checkout-container">
    <div class="icon-header">
        <ion-icon name="cart-outline"></ion-icon>
    </div>
    <h2>Checkout</h2>

    <form method="POST">

        <div class="form-group">
            <label for="alamat_pengiriman">Alamat Pengiriman</label>
            <textarea name="alamat_pengiriman" id="alamat_pengiriman" rows="3" placeholder="Tulis alamat lengkap" required></textarea>
        </div>

        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select name="metode_pembayaran" id="metode_pembayaran" required>
                <option value="">Pilih Metode</option>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="COD">COD</option>
                <option value="E-Wallet">E-Wallet</option>
            </select>
        </div>

        <div class="form-group">
            <label for="metode_pengiriman">Metode Pengiriman</label>
            <select name="metode_pengiriman" id="metode_pengiriman" required>
                <option value="">Pilih Kurir</option>
                <option value="JNE">JNE</option>
                <option value="J&T">J&T</option>
                <option value="SiCepat">SiCepat</option>
            </select>
        </div>

        <button type="submit">Checkout Sekarang</button>
    </form>
</div>

</body>
</html>

<?php } ?>
