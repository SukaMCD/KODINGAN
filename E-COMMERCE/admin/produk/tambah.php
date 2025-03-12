<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        /* Styling dasar untuk body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2b2b2b;
            /* Warna latar belakang gelap */
            color: #f4f4f4;
            /* Warna teks terang */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Styling untuk judul */
        h1 {
            font-size: 2.5rem;
            color: #007bff;
            /* Warna judul biru */
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
        }

        /* Styling untuk tombol link kembali */
        a {
            color: #007bff;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        /* Styling untuk form */
        form {
            background: #383838;
            /* Warna latar belakang form */
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            padding: 20px;
            width: 100%;
            max-width: 400px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ffffff;
            /* Warna label putih */
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            /* Batas input berwarna abu-abu */
            border-radius: 4px;
            background-color: #2e2e2e;
            /* Warna latar belakang input */
            color: #f4f4f4;
            /* Warna teks input */
            font-size: 1rem;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            /* Memungkinkan perubahan ukuran vertikal */
        }

        input[type="file"] {
            border: none;
            padding: 10px;
        }

        button {
            background-color: #007bff;
            /* Warna tombol biru */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #0056b3;
            /* Warna tombol saat hover */
            transform: translateY(-3px);
        }
    </style>
</head>

<body>
    <center>
        <h1>Tambah Produk</h1>
        <a href="index.php">KEMBALI</a>
        <form method="POST" action="tambah_aksi.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" placeholder="Masukkan nama barang" required />
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" required />
            </div>    
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                    $no = 1;
                    if (mysqli_num_rows($data) > 0) {
                        while ($d = mysqli_fetch_array($data)) {
                    ?>
                            <option value="<?php echo $d['nama_kategori'] ?>"><?php echo $d['nama_kategori'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" required />
            </div>
            <div class="form-group">
                <label>Kualitas</label>
                <input type="text" name="kualitas" required />
            </div>
            <div class="form-group">
                <label>Kemasan</label>
                <select name="kemasan" required>
                    <option value="">Pilih Kemasan</option>
                    <option value="kardus">Kardus</option>
                    <option value="plastik">Plastik</option>
                    <option value="kayu">Kayu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Gambar Produk</label>
                <input type="file" name="gambar_produk" required />
            </div>
            <div class="form-group">
                <button type="submit">Simpan Produk</button>
            </div>
        </form>
    </center>
</body>

</html>