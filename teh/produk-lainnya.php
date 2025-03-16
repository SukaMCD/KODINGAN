<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- Header inclusion with PHP -->
<?php include "header.php"; ?>

<!-- Produk Lainnya Section -->
<?php
  include 'koneksi.php';
  $query = "SELECT * FROM produk ORDER BY id DESC";
  $result = mysqli_query($koneksi, $query);
  ?>

  <section class="best-seller py-5" id="product">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="display-5 fw-bold">PRODUCTS</h2>
        <hr class="mx-auto" style="width: 50px; height: 3px; background-color: #198754;">
        <p class="lead text-muted">Discover our most popular tea selections</p>
      </div>

      <div class="row g-4 justify-content-center">
        <?php while ($row = mysqli_fetch_assoc($result)) {

          // Cek status stok
          $stokStatus = '';
          $stokClass = '';
          if ($row['stok'] <= 0) {
            $stokStatus = 'Habis';
            $stokClass = 'bg-danger';
          } elseif ($row['stok'] <= 5) {
            $stokStatus = 'Stok: ' . $row['stok'];
            $stokClass = 'bg-warning';
          } else {
            $stokStatus = 'Stok: ' . $row['stok'];
            $stokClass = 'bg-success';
          }

          $harga = isset($row['harga']) ? 'Rp ' . number_format($row['harga'], 0, ',', '.') . ',00' : 'Harga tidak tersedia';
        ?>
          <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="800">
            <div class="card h-100 border-0 overflow-hidden shadow product-card position-relative">

              <!-- Badge Stok -->
              <div class="position-absolute top-0 end-0 m-2">
                <span class="badge <?php echo $stokClass; ?>">
                  <?php echo $stokStatus; ?>
                </span>
              </div>

              <!-- Gambar Produk -->
              <div class="product-img-container position-relative">
                <?php if (!empty($row['gambar_produk'])) { ?>
                  <img src="admin/FINAPP/database/produk/gambar/<?php echo $row['gambar_produk']; ?>" class="card-img-top square-image" alt="<?php echo $row['nama_barang']; ?>">
                <?php } else { ?>
                  <div class="no-image text-center py-5 text-muted square-placeholder">
                    <i class="bi bi-image" style="font-size: 2rem;"></i>
                    <p>Tidak ada gambar</p>
                  </div>
                <?php } ?>
              </div>


              <!-- Konten Produk -->
              <div class="card-body text-light" style="background-color: #3f594a;">
                <h5 class="card-title fw-bold"><?php echo $row['nama_barang']; ?></h5>
                <hr>

                <!-- Harga -->
                <div class="fs-5 fw-bold mb-2"><?php echo $harga; ?></div>

                <!-- Deskripsi -->
                <?php if (!empty($row['deskripsi'])) { ?>
                  <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                <?php } else { ?>
                  <p class="card-text text-muted">Deskripsi tidak tersedia</p>
                <?php } ?>

                <!-- Tombol Keranjang -->
                <div class="d-flex justify-content-center mt-3">
                  <?php if ($row['stok'] > 0) { ?>

                    <?php if (isset($_SESSION['user'])) { ?>
                      <!-- User Sudah Login -->
                      <a href="database/produk/keranjang/keranjang.php?id=<?php echo $row['id']; ?>"
                        class="btn btn-light w-100 fw-bold">
                        <i class="bi bi-cart-plus me-2"></i> Buy Now
                      </a>
                    <?php } else { ?>
                      <!-- User Belum Login -->
                      <button
                        class="btn btn-light w-100 fw-bold btn-login-alert"
                        data-namaproduk="<?php echo $row['nama_barang']; ?>">
                        <i class="bi bi-cart-plus me-2"></i> Buy Now
                      </button>
                    <?php } ?>

                  <?php } else { ?>
                    <!-- Stok Habis -->
                    <button class="btn btn-secondary w-100 fw-bold" disabled>
                      <i class="bi bi-cart-x me-2"></i> Stok Habis
                    </button>
                  <?php } ?>
                </div>


              </div>
            </div>
          </div>

        <?php } ?>
      </div>
  </section>

<!-- Footer inclusion with PHP -->
<?php include "footer.php"; ?>

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  // Initialize AOS
  AOS.init();
</script>
</body>

</html>