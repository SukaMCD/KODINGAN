<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah User | FinApp Style</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ionicons buat icon user -->
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>

    <!-- Custom FinApp Style -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 60px auto;
            padding: 25px;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        }
        .container h2 {
            text-align: center;
            color: #4e54c8;
            margin-bottom: 5px;
        }
        .container h3 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            font-size: 18px;
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

<div class="container">
    <div class="icon-header">
        <ion-icon name="person-add-outline"></ion-icon>
    </div>
    <h2>Tambah User</h2>
    <h3>Masukkan data user baru</h3>

    <form action="tambah_aksi.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>

        <!-- Kalau mau aktifin email, tinggal uncomment aja bro!
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        -->

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" required>
                <option value="">Pilih Level</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>

        <button type="submit" class="btn-submit">Simpan User</button>
    </form>

    <a href="index.php" class="back-link">← Kembali ke Daftar User</a>
</div>

</body>
</html>
