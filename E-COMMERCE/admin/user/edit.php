<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2b2b2b; /* Warna latar belakang gelap */
            color: #f4f4f4; /* Warna teks terang */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff; /* Warna judul biru */
        }

        a {
            color: #007bff; /* Warna link biru */
            text-decoration: none;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }

        form {
            background: #383838; /* Warna latar belakang form */
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            padding: 20px;
            width: 400px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ffffff; /* Warna label putih */
        }

        input[type="email"],
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #555; /* Batas input berwarna abu-abu */
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
            background-color: #2e2e2e; /* Warna latar belakang input */
            color: #f4f4f4; /* Warna teks input */
        }

        button {
            background-color: #007bff; /* Warna tombol biru */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3; /* Warna tombol saat hover */
        }

        /* Gaya tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #555; /* Batas tabel berwarna abu-abu */
        }

        th {
            background-color: #007bff; /* Warna latar belakang header tabel */
            color: #ffffff; /* Warna teks header tabel */
        }

        tr:nth-child(even) {
            background-color: #444; /* Warna latar belakang baris genap */
        }

        tr:hover {
            background-color: #555; /* Warna latar belakang saat hover baris */
        }
    </style>
</head>
<body>
    <h2>EDIT BARANG</h2>
    <a href="index.php">KEMBALI</a>
    <h3>EDIT DATA BARANG</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from user where id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
        <form action="update.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $d['username']; ?>" required />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $d['password']; ?>" required />
            </div>
            <div class="form-group">
                <label>Level</label>
                <select name="level" required>
                    <option value="">Pilih Level</option>
                    <option value="Admin" <?php echo $d['level'] == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                    <option value="User" <?php echo $d['level'] == 'User' ? 'selected' : ''; ?>>User</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </form>
    <?php
    }
    ?>
</body>
</html>
