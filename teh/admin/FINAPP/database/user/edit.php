<?php
include 'koneksi.php';

$id = $_GET['id']; // Ambil ID dari URL
$data = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User | FinApp Style</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ionicons CDN buat icon -->
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6fa;
            margin: 0;
            padding: 0;
        }
        .edit-container {
            max-width: 500px;
            margin: 60px auto;
            padding: 25px;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        }
        .edit-container h2 {
            text-align: center;
            color: #4e54c8;
            margin-bottom: 20px;
        }
        .icon-header {
            font-size: 50px;
            color: #4e54c8;
            text-align: center;
            margin-bottom: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 12px;
            font-size: 14px;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }
        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: #4e54c8;
            color: #ffffff;
            font-size: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-submit:hover {
            background-color: #373fc8;
        }
        .back-link {
            text-align: center;
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #4e54c8;
            font-size: 14px;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="edit-container">
    <div class="icon-header">
        <ion-icon name="person-circle-outline"></ion-icon>
    </div>
    <h2>Edit User</h2>

    <form action="update.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($d['username']); ?>" required>
        </div>

        <!-- Kalau mau aktifin email, tinggal uncomment
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($d['email']); ?>" required>
        </div>
        -->

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" value="<?php echo htmlspecialchars($d['password']); ?>" required>
        </div>

        <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" required>
                <option value="admin" <?php if ($d['level'] == 'admin') echo 'selected'; ?>>Admin</option>
                <option value="user" <?php if ($d['level'] == 'user') echo 'selected'; ?>>User</option>
            </select>
        </div>

        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

        <button type="submit" class="btn-submit" onclick="return confirm('Yakin ingin mengubah <?php echo htmlspecialchars($d['username']); ?>?')">Simpan Perubahan</button>
    </form>

    <a href="index.php" class="back-link">← Kembali ke Daftar User</a>
</div>

</body>
</html>
