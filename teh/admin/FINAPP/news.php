<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Terbaru</title>
    <style>
        /* Styling Produk Card */
        .product-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 10px;
            background-color: #fff;
            position: relative;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Styling Gambar Produk */
        .product-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .image-container {
            overflow: hidden;
            position: relative;
        }

        .no-image {
            height: 220px;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-weight: 500;
        }

        /* Badge Stok */
        .stock-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 12px;
            z-index: 2;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .in-stock {
            background-color: #d4edda;
            color: #155724;
        }

        .low-stock {
            background-color: #fff3cd;
            color: #856404;
        }

        .out-stock {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Styling Card Content */
        .product-content {
            padding: 16px;
        }

        .product-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #343a40;
            line-height: 1.3;
            height: 42px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            /* -webkit-line-clamp: 2; */
            -webkit-box-orient: vertical;
        }

        .product-description {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 15px;
            height: 60px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            /* -webkit-line-clamp: 3; */
            -webkit-box-orient: vertical;
        }

        /* Styling Tombol */
        .product-footer {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        .cart-button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 0;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            width: 100%;
        }

        .cart-button:hover {
            background-color: #0069d9;
        }

        /* Styling Section & Heading */
        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 22px;
            font-weight: 700;
            color: #212529;
            position: relative;
            padding-bottom: 5px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: #007bff;
        }

        .view-all {
            color: #007bff;
            font-weight: 600;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .view-all:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        /* Grid Layout */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }

        /* Penyesuaian untuk Mobile */
        @media (max-width: 1200px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="section full mt-4 mb-3">
        <div class="section-heading padding">
            <h2 class="section-title">Produk Terbaru</h2>
            <a href="./app-products.php" class="view-all">Lihat Semua</a>
        </div>

        <div class="product-grid">
            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id DESC LIMIT 4");
            while ($d = mysqli_fetch_array($data)) {
                // Menentukan status stok
                $stokStatus = '';
                $stokClass = '';
                if ($d['stok'] <= 0) {
                    $stokStatus = 'Habis';
                    $stokClass = 'out-stock';
                } elseif ($d['stok'] <= 5) {
                    $stokStatus = 'Stok: ' . $d['stok'];
                    $stokClass = 'low-stock';
                } else {
                    $stokStatus = 'Stok: ' . $d['stok'];
                    $stokClass = 'in-stock';
                }

                // Format harga
                $harga = isset($d['harga']) ? 'Rp ' . number_format($d['harga'], 0, ',', '.') : 'Harga tidak tersedia';
            ?>
                <div class="product-card">
                    <!-- Badge Stok -->
                    <span class="stock-badge <?php echo $stokClass; ?>"><?php echo $stokStatus; ?></span>

                    <!-- Gambar Produk -->
                    <div class="image-container">
                        <?php if (!empty($d['gambar_produk'])) { ?>
                            <img src="database/produk/gambar/<?php echo $d['gambar_produk']; ?>"
                                alt="<?php echo $d['nama_barang']; ?>"
                                class="product-image">
                        <?php } else { ?>
                            <div class="no-image">
                                <i class="bi bi-image"></i> Tidak ada gambar
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Konten Produk -->
                    <div class="product-content">
                        <h5 class="product-title"><?php echo $d['nama_barang']; ?></h5>
                        <hr>

                        <?php if (isset($d['harga'])) { ?>
                            <div class="product-price"><?php echo $harga; ?></div>
                        <?php } ?>

                        <?php if (isset($d['deskripsi']) && !empty($d['deskripsi'])) { ?>
                            <p class="product-description"><?php echo $d['deskripsi']; ?></p>
                        <?php } else { ?>
                            <p class="product-description">Deskripsi produk tidak tersedia</p>
                        <?php } ?>

                        <!-- Tombol Keranjang -->
                        <div class="product-footer">
                            <a href="database/produk/keranjang/keranjang.php?id=<?php echo $d['id'] ?>"
                                class="btn btn-primary w-100 fw-bold text-white">
                                <i class="bi bi-cart-plus me-2"></i> Masukkan ke Keranjang
                            </a>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>