<style>
    .product-tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
        border-bottom: 2px solid #e9ecef;
    }
    
    .product-tab {
        padding: 12px 20px;
        margin: 0 10px;
        cursor: pointer;
        font-weight: 600;
        color: #6c757d;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
    }
    
    .product-tab.active {
        color: #007bff;
        border-bottom-color: #007bff;
    }
    
    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
    
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
    
    .product-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
        position: relative;
        height: 100%;
    }
    
    .product-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
    
    .product-content {
        padding: 15px;
    }
    
    .product-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px;
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
        margin-bottom: 10px;
        height: 60px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        /* -webkit-line-clamp: 3; */
        -webkit-box-orient: vertical;
    }
    
    .product-price {
        font-weight: 700;
        color: #007bff;
        margin-bottom: 10px;
    }
    
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
    
    .cart-button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    
    .cart-button:disabled {
        background-color: #6c757d;
        cursor: not-allowed;
    }
</style>

<div class="container mt-4">
    <h1 class="text-center mb-4">Semua Produk</h1>
    
    <div class="product-tabs">
        <div class="product-tab active" data-category="semua">Semua Produk</div>
        <?php
        include 'koneksi.php';
        $kategori_query = mysqli_query($koneksi, "SELECT * FROM kategori");
        while ($kategori = mysqli_fetch_array($kategori_query)) {
            echo '<div class="product-tab" data-category="' . $kategori['id'] . '">' . $kategori['nama_kategori'] . '</div>';
        }
        ?>
    </div>
    
    <div class="product-grid">
        <?php
        $produk_query = mysqli_query($koneksi, "SELECT p.*, k.nama_kategori 
                                                FROM produk p
                                                LEFT JOIN kategori k ON p.id = k.id
                                                ORDER BY p.id DESC");
        while ($produk = mysqli_fetch_array($produk_query)) {
            // Menentukan status stok
            $stokStatus = '';
            $stokClass = '';
            if ($produk['stok'] <= 0) {
                $stokStatus = 'Habis';
                $stokClass = 'out-stock';
            } elseif ($produk['stok'] <= 5) {
                $stokStatus = 'Stok: ' . $produk['stok'];
                $stokClass = 'low-stock';
            } else {
                $stokStatus = 'Stok: ' . $produk['stok'];
                $stokClass = 'in-stock';
            }
        ?>
        <div class="product-card" data-category="<?php echo $produk['id'] ?? 'semua'; ?>">
            <span class="stock-badge <?php echo $stokClass; ?>"><?php echo $stokStatus; ?></span>
            
            <img src="database/produk/gambar/<?php echo $produk['gambar_produk']; ?>" 
                 alt="<?php echo $produk['nama_barang']; ?>" 
                 class="product-image">
            
            <div class="product-content">
                <h5 class="product-title"><?php echo $produk['nama_barang']; ?></h5>
                <div class="product-price">Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></div>
                
                <?php if (isset($produk['deskripsi']) && !empty($produk['deskripsi'])) { ?>
                    <p class="product-description"><?php echo $produk['deskripsi']; ?></p>
                <?php } else { ?>
                    <p class="product-description">Deskripsi produk tidak tersedia</p>
                <?php } ?>
                
                <form method="POST" action="../database/produk/keranjang/tambah_keranjang.php">
                    <input type="hidden" name="id" value="<?php echo $produk['id']; ?>">
                    <button type="submit" class="cart-button" <?php echo ($produk['stok'] <= 0) ? 'disabled' : ''; ?>>
                        <?php echo ($produk['stok'] <= 0) ? 'Stok Habis' : 'Masukkan ke Keranjang'; ?>
                    </button>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab switching logic
    const tabs = document.querySelectorAll('.product-tab');
    const products = document.querySelectorAll('.product-card');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Get selected category
            const category = this.getAttribute('data-category');
            
            // Show/hide products based on category
            products.forEach(product => {
                const productCategory = product.getAttribute('data-category');
                
                if (category === 'semua' || productCategory === category) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });
});
</script>