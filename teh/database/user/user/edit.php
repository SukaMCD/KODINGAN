<?php
include 'koneksi.php';

$id = $_GET['id']; // Ambil ID dari URL
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT USER</title>
</head>
<body>
    <h2>EDIT USER</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br><br>
    
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $d['username']; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $d['email']; ?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $d['password']; ?>" required></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level" style="width: 100%">
                        <option value="admin" <?php if ($d['level'] == 'admin') echo 'selected'; ?>>Admin</option>
                        <option value="user" <?php if ($d['level'] == 'user') echo 'selected'; ?>>User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="submit" onclick="confirm('Yakin ingin mengubah <?php echo $d['username']; ?>?')" value="SIMPAN">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
