<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Produk | FinApp Style</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ionicons untuk icon -->
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>

    <!-- Custom FinApp CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4e54c8;
            margin-bottom: 5px;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            font-size: 18px;
        }

        .icon-header {
            font-size: 50px;
            color: #4e54c8;
            text-align: center;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 12px;
            font-size: 14px;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        textarea {
            resize: vertical;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: #4e54c8;
            color: #ffffff;
            font-size: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background-color: #373fc8;
        }

        .back-link {
            text-align: center;
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #4e54c8;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="icon-header">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
        <h2>Tambah Produk</h2>
        <h3>Isi data produk baru</h3>

        <form action="tambah_aksi.php" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" id="stok" min="0" required>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                    while ($d = mysqli_fetch_array($data)) {
                        echo "<option value='{$d['nama_kategori']}'>{$d['nama_kategori']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" min="0" required>
            </div>

            <div class="form-group">
                <label for="gambar_produk">Gambar Produk</label>
                <input type="file" name="gambar_produk" id="gambar_produk" required>
            </div>

            <button type="submit" class="btn-submit">Simpan Produk</button>
        </form>

        <a href="index.php" class="back-link">← Kembali ke Daftar Produk</a>
    </div>

</body>

</html>
