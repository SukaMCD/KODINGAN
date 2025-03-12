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
            max-width: 1000px;
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
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        th {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-weight: 600;
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

        .action-buttons {
    display: flex;
    gap: 10px;
}

.edit-btn, .delete-btn {
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
}

.edit-btn {
    background: rgba(103, 126, 234, 0.7); /* Warna sesuai tema gradien */
}

.edit-btn:hover {
    background: rgba(103, 126, 234, 0.9);
    transform: translateY(-3px);
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.delete-btn {
    background: rgba(178, 34, 34, 0.7); /* Warna merah gelap yang lembut */
}

.delete-btn:hover {
    background: rgba(178, 34, 34, 0.9);
    transform: translateY(-3px);
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
    </style>
</head>

<body>

    <h2>User</h2>
    <div class="button-container">
        <a href="tambah.php" class="button">+ Tambah User</a>
        <a href="../index.php" class="home-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/1946/1946488.png" alt="Kembali" />
        </a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM user");
        if (!$data) {
            echo "<tr><td colspan='10'>Gagal melakukan query: " . mysqli_error($koneksi) . "</td></tr>";
            exit;
        }
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['level']; ?></td>
                <td>
                    <div class="action-buttons">
                        <a href="edit.php?id=<?php echo $d['id']; ?>" class="edit-btn">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>" class="delete-btn">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>