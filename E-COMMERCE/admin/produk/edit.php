<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2b2b2b;
            /* Warna latar belakang gelap */
            color: #f4f4f4;
            /* Warna teks terang */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff;
            /* Warna judul biru */
        }

        a {
            color: #007bff;
            /* Warna link biru */
            text-decoration: none;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        a:hover {
            text-decoration: underline;
            /* Garis bawah saat hover */
        }

        form {
            background: #383838;
            /* Warna latar belakang form */
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            padding: 20px;
            width: 400px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #555;
            /* Batas tabel berwarna abu-abu */
        }

        th {
            background-color: #007bff;
            /* Warna latar belakang header tabel */
            color: #ffffff;
            /* Warna teks header tabel */
        }

        tr:nth-child(even) {
            background-color: #444;
            /* Warna latar belakang baris genap */
        }

        tr:hover {
            background-color: #555;
            /* Warna latar belakang saat hover baris */
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            /* Batas input berwarna abu-abu */
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
            background-color: #2e2e2e;
            /* Warna latar belakang input */
            color: #f4f4f4;
            /* Warna teks input */
        }

        input[type="submit"] {
            background-color: #007bff;
            /* Warna tombol biru */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="sx  ubmit"]:hover {
            background-color: #0056b3;
            /* Warna tombol saat hover */
        }
    </style>
</head>

<body>
    <h2>EDIT BARANG</h2>
    <a href="index.php">KEMBALI</a>
    <h3>EDIT DATA BARANG</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>
                        <textarea name="deskripsi" cols="30" rows="5" required><?php echo $d['deskripsi']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>
                        <input type="number" name="stok" value="<?php echo $d['stok']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>
                        <select name="kategori" required>
                            <option value="">Pilih Kategori</option>
                            <?php
                            $query_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                            while ($kategori = mysqli_fetch_array($query_kategori)) {
                                $selected = ($d['kategori'] == $kategori['nama_kategori']) ? 'selected' : '';
                            ?>
                                <option value="<?php echo $kategori['nama_kategori']; ?>" <?php echo $selected; ?>>
                                    <?php echo $kategori['nama_kategori']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>
                        <input type="text" name="harga" value="<?php echo $d['harga']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <th>Kualitas</th>
                    <td>
                        <input type="text" name="kualitas" value="<?php echo $d['kualitas']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <th>Kemasan</th>
                    <td>
                        <select name="kemasan" required>
                            <option value="">Pilih Kemasan</option>
                            <option value="Kardus" <?php echo $d['kemasan'] == 'Kardus' ? 'selected' : ''; ?>>Kardus</option>
                            <option value="Plastik" <?php echo $d['kemasan'] == 'Plastik' ? 'selected' : ''; ?>>Plastik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Gambar Produk</th>
                    <td>
                        <img src="gambar/<?php echo $d['gambar_produk']; ?>" style="width: 120px; float: left; margin-bottom: 5px;">
                        <input type="file" name="gambar_produk">
                        <i style="float: left; font-size: 11px; color: red">Abaikan jika tidak merubah gambar produk</i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">
                        <input type="submit" value="SIMPAN">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>