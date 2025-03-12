<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHAT THE SIGMA</title>
    <!-- Link ke Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMUfhKbVR3f0RCwVAWIeDh7VZ3WkPj5xgOsBtb" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            color: white;
        }

        h2 {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .button,
        .home-icon {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            padding: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button:hover,
        .home-icon:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-5px);
        }

        .home-icon img {
            width: 30px;
            height: 30px;
            filter: invert(1);
        }

        table {
            width: 100%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border-collapse: separate;
            border-spacing: 0;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        th {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        td:last-child,
        th:last-child {
            border-right: none;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        td a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
            padding: 8px 15px;
            border-radius: 5px;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        td a:first-child {
            background: rgba(103, 126, 234, 0.7);
            transition: all 0.3s ease;
        }

        td a:first-child:hover {
            background: rgba(103, 126, 234, 0.9);
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        td a:last-child {
            background: rgba(178, 34, 34, 0.7);
            transition: all 0.3s ease;
        }

        td a:last-child:hover {
            background: rgba(178, 34, 34, 0.9);
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <h2>KATEGORI</h2>
    <div class="button-container">
        <a href="tambah.php" class="button">+ Tambah Kategori</a>
        <a href="../index.php" class="home-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/1946/1946488.png" alt="Kembali" />
        </a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM kategori");
        if (!$data) {
            echo "<tr><td colspan='10'>Gagal melakukan query: " . mysqli_error($koneksi) . "</td></tr>";
            exit;
        }
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_kategori']; ?></td>
                <td>
                    <div class="action-buttons">
                        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>