<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <style>
        td img {
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>DATA PRODUK</h2><br>
        <a href="tambah.php">+ TAMBAH DATA PRODUK</a><br><br>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Gambar Produk</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM produk");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_barang']; ?></td>
                <td><?php echo $d['deskripsi']; ?></td>
                <td><?php echo $d['stok']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td style="text-align: center;">
                    <img src="gambar/<?php echo $d['gambar_produk']; ?>" alt="<?php echo $d['nama_barang'];?>">
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">HAPUS</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>
</body>
</html>
