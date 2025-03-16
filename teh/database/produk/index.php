<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            background-color: #ffffff;
        }

        .btn-add {
            background: linear-gradient(90deg, #6f42c1, #0d6efd);
            color: #fff;
            border-radius: 8px;
            padding: 10px 20px;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }

        .btn-add:hover {
            opacity: 0.9;
        }

        table {
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
        }

        th {
            background-color: #0d6efd;
            color: #ffffff;
            text-align: center;
        }

        td {
            vertical-align: middle;
        }

        img {
            width: 80px;
            border-radius: 8px;
        }

        .btn-edit, .btn-delete {
            border-radius: 6px;
            padding: 5px 10px;
            font-size: 14px;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-edit:hover, .btn-delete:hover {
            opacity: 0.85;
        }

        h2 {
            font-weight: 600;
            color: #343a40;
            margin-bottom: 20px;
        }

        .table-responsive {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2 class="text-center">Data Produk</h2>
        <a href="tambah.php" class="btn-add">+ Tambah Data Produk</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Gambar Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM produk");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td><?php echo $d['nama_barang']; ?></td>
                            <td><?php echo $d['deskripsi']; ?></td>
                            <td class="text-center"><span class="badge bg-success">Stok: <?php echo $d['stok']; ?></span></td>
                            <td><?php echo $d['kategori']; ?></td>
                            <td>Rp <?php echo number_format($d['harga'], 0, ',', '.'); ?></td>
                            <td class="text-center">
                                <img src="gambar/<?php echo $d['gambar_produk']; ?>" alt="<?php echo $d['nama_barang']; ?>">
                            </td>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-edit btn-sm">Edit</a>
                                <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-delete btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
