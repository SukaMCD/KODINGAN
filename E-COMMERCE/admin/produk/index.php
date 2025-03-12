<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHAT THE SIGMA</title>
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
            max-width: 1200px;
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

        td img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        td img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        td a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .edit-btn,
        .delete-btn {
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
            background: rgba(103, 126, 234, 0.7);
        }

        .edit-btn:hover {
            background: rgba(103, 126, 234, 0.9);
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .delete-btn {
            background: rgba(178, 34, 34, 0.7);
        }

        .delete-btn:hover {
            background: rgba(178, 34, 34, 0.9);
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <h2>Barang</h2>
    <div class="button-container">
        <a href="tambah.php" class="button">+ Tambah Barang</a>
        <a href="../index.php" class="home-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/1946/1946488.png" alt="Kembali" />
        </a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Kualitas</th>
            <th>Kemasan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM produk");
        $no = 1;
        if (mysqli_num_rows($data) > 0) {
            while ($d = mysqli_fetch_array($data)) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_barang']; ?></td>
                    <td><?php echo $d['deskripsi']; ?></td>
                    <td><?php echo $d['stok']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td><?php echo "Rp " . number_format($d['harga'], 0, ',', '.'); ?></td>

                    <td><?php echo $d['kualitas']; ?></td>
                    <td><?php echo $d['kemasan']; ?></td>
                    <td style="text-align: center;">
                        <img src="gambar/<?php echo $d['gambar_produk']; ?>" alt="<?php echo $d['nama_barang']; ?>">
                    </td>
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
        } else {
            echo "<tr><td colspan='10'>Tidak ada data.</td></tr>";
        }
        ?>
    </table>

</body>

</html>