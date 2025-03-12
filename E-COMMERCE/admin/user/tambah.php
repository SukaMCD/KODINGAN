<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
    <style>

    </style>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const showPasswordCheckbox = document.getElementById("showPassword");
            
            if (showPasswordCheckbox.checked) {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</head>
<body>
    <h2>DATA USER</h2>
    <a href="index.php">KEMBALI</a>
    <form method="post" action="tambah_aksi.php">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" id="password" name="password" required />
            <div class="show-password">
                <input type="checkbox" id="showPassword" onchange="togglePassword()">
                <label for="showPassword">Show Password</label>
            </div>
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="level" required>
                <option value="">Pilih Level</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">SIMPAN</button>
        </div>
    </form>
</body>
</html>
