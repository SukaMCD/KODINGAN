<!DOCTYPE html>
<html>
<head>
    <title>USER</title>
</head>
<body>
    
    <h2>USER</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br>
    <br>
    <h3>TAMBAH USER</h3>
    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level" style="width: 100%">
                    <option value="">Pilih Level</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>