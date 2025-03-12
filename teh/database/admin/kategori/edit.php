<?php
include 'koneksi.php';

$id = $_GET['id']; // Ambil ID dari URL
$data = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT KATEGORI</title>
</head>
<body>
    <h2>EDIT KATEGORI</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br><br>

    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama Kategori</td>
                <td><input type="text" name="nama_kategori" value="<?php echo $d['nama_kategori']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="submit" onclick="confirm('Yakin ingin mengubah <?php echo $d['nama_kategori']; ?>?')" value="SIMPAN">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
