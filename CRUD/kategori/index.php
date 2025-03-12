<!DOCTYPE html>
<html>

<head>
    <title>Kategori</title>
</head>

<body>
    <h2>Kategori</h2><br>
    <a href="tambah.php">+ TAMBAH KATEGORI</a><br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama Kategori</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from kategori");
        while($d = mysqli_fetch_array($data)){
        ?>
         <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_kategori']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">HAPUS</a>
            </td>
         </tr>  
         <?php 
         
        }

        ?>
    </table>
</body>
</html>