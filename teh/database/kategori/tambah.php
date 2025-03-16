<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Kategori | FinApp Style</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ionicons buat icon modern -->
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>

    <!-- Custom CSS FinApp -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 80px auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4e54c8;
            margin-bottom: 10px;
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

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 12px;
            font-size: 14px;
            box-sizing: border-box;
            background-color: #f9f9f9;
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
            <ion-icon name="pricetags-outline"></ion-icon>
        </div>
        <h2>Kategori</h2>
        <h3>Tambah Kategori Baru</h3>

        <form action="tambah_aksi.php" method="post" onsubmit="return confirm('Yakin ingin menambah kategori ini?')">

            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" placeholder="Masukkan nama kategori..." required>
            </div>

            <button type="submit" class="btn-submit">Simpan</button>
        </form>

        <a href="index.php" class="back-link">← Kembali ke Dashboard</a>
    </div>

</body>

</html>
