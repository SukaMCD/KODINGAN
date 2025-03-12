<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
</head>

<body>
    <h2>Tambah Produk</h2>
    <a href="index.php">KEMBALI</a>
    <br><br>
    
    <form action="tambah_aksi.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi" cols="50" rows="5" required></textarea></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" required></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while ($d = mysqli_fetch_array($data)) {
                            echo "<option value='{$d['nama_kategori']}'>{$d['nama_kategori']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" required></td>
            </tr>
            <tr>
                <td>Gambar Produk</td>
                <td><input type="file" name="gambar_produk" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>
