<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <a href="index.php">KEMBALI</a>
    <br><br>

    <form action="update.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi" cols="50" rows="5" required><?php echo $d['deskripsi']; ?></textarea></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" value="<?php echo $d['stok']; ?>" required></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori" required>
                        <?php
                        $kategori_data = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while ($kat = mysqli_fetch_array($kategori_data)) {
                            $selected = ($kat['nama_kategori'] == $d['kategori']) ? "selected" : "";
                            echo "<option value='{$kat['nama_kategori']}' $selected>{$kat['nama_kategori']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $d['harga']; ?>" required></td>
            </tr>
            <tr>
                <td>Gambar Produk</td>
                <td>
                    <input type="file" name="gambar_produk">
                    <input type="hidden" name="gambar_lama" value="<?php echo $d['gambar_produk']; ?>">
                    <br>
                    <img src="gambar/<?php echo $d['gambar_produk']; ?>" width="100">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="submit" onclick="confirm('Yakin ingin mengubah <?php echo $d['nama_barang']; ?>?')" value="SIMPAN">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
