<!DOCTYPE html>
<html>

<head>
    <title>USER</title>
</head>

<body>
    <h2>USER</h2><br>
    <a href="tambah.php">+ TAMBAH USER</a><br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Level</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from user");
        while($d = mysqli_fetch_array($data)){
        ?>
         <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['password']; ?></td>
            <td><?php echo $d['level']; ?></td>
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