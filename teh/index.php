<?php
session_start(); // Penting! Biar session-nya kebaca.
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leafly Tea - Premium Tea Beverages</title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="gambar/favicon.png" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="asset/teh.css" />
  <!-- Meta tags for SEO -->
  <meta name="description" content="Leafly Tea offers premium tea beverages with authentic flavors and a modern twist. Discover our collection of refreshing teas made from high-quality natural ingredients.">
  <meta name="keywords" content="tea, leafly, matcha, lemon tea, milk tea, premium tea">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- Header Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a href="index.php">
          <img src="gambar/Leafly_logo-removebg-preview.png" width="150px" alt="Leafly Tea">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu p-2 border-0 shadow">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="#" class="text-dark text-decoration-none">
                      <div class="d-flex p-2 align-item-center">
                        <div class="icon fs-1 px-3 bg-warning-subtle rounded-3">
                          <img src="gambar/s118465655369280292_p154_i4_w600__1_-removebg-preview.png" width="100px"
                            height="100px" alt="Ice Tea">
                        </div>
                        <div class="text px-3">
                          <h5>Ice Tea</h5>
                          <div>Classic cold-brewed tea that's perfectly sweetened and deeply refreshing.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a href="#" class="text-dark text-decoration-none">
                      <div class="d-flex p-2 align-item-center">
                        <div class="icon fs-1 px-3 bg-warning-subtle rounded-3">
                          <img src="gambar/Desain_tanpa_judul__5_-removebg-preview.png" width="100px" height="100px"
                            alt="Lemon Tea">
                        </div>
                        <div class="text px-3">
                          <h5>Lemon Tea</h5>
                          <div>Refreshing black tea infused with zesty lemon for a bright.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a href="#" class="text-dark text-decoration-none">
                      <div class="d-flex p-2 align-item-center">
                        <div class="icon fs-1 px-3 bg-warning-subtle rounded-3">
                          <img src="gambar/Desain_tanpa_judul__5_-removebg-preview.jpg" width="100px" height="100px"
                            alt="Matcha">
                        </div>
                        <div class="text px-3">
                          <h5>Green Tea</h5>
                          <div>Premium Japanese green tea with a rich, earthy flavor and smooth finish.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a href="#" class="text-dark text-decoration-none">
                      <div class="d-flex p-2 align-item-center">
                        <div class="icon fs-1 px-3 bg-warning-subtle rounded-3">
                          <img src="gambar/Desain_tanpa_judul__6_-removebg-preview.png" width="100px" height="100px"
                            alt="Milk Tea">
                        </div>
                        <div class="text px-3">
                          <h5>Milk Tea</h5>
                          <div>Creamy milk tea with a perfect balance of robust tea flavor and smooth dairy richness.
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </li> -->

            <li>
              <a href="#product" class="nav-link">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us">About Us</a>
            </li>
          </ul>

          <div class="d-flex align-items-center">
            <!-- Tombol Keranjang -->
            <a id="keranjangBtn" class="btn btn-custom py-2 px-3 me-2 position-relative" href="javascript:void(0);">
              <i class="bi bi-cart"></i> Keranjang
              <?php if (isset($_SESSION['keranjang']) && count($_SESSION['keranjang']) > 0): ?>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?php echo count($_SESSION['keranjang']); ?>
                </span>
              <?php endif; ?>
            </a>

          </div>

          <!-- Tombol Login / Username -->
          <?php if (isset($_SESSION['user'])): ?>
            <div class="dropdown">
              <button class="btn btn-outline-success dropdown-toggle py-2 px-3" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> <?php echo htmlspecialchars($_SESSION['user']['username']); ?>
              </button>
              <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="database/produk/keranjang/riwayat.php">History</a></li> <!-- Tombol History disini -->
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
              </ul>
            </div>
          <?php else: ?>
            <a href="login.php" class="btn py-2 px-3"
              style="background-color: #3f594a; color: #fff;">
              <i class="bi bi-person"></i> Login
            </a>
          <?php endif; ?>
        </div>


      </div>
      </div>
    </nav>
  </header>

  <!-- Hero Carousel -->
  <section class="hero-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="8000">
          <img src="gambar/1.png" class="d-block w-100" alt="Leafly Tea Showcase">
        </div>
        <div class="carousel-item" data-bs-interval="8000">
          <img src="gambar/2.png" class="d-block w-100" alt="Leafly Tea Products">
        </div>
        <div class="carousel-item" data-bs-interval="8000">
          <img src="gambar/3.png" class="d-block w-100" alt="Leafly Tea Experience">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark bg-opacity-50 rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark bg-opacity-50 rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    </div>
  </section>

  <!-- Best Seller Section -->
  <?php
  include 'koneksi.php';
  $query = "SELECT * FROM produk ORDER BY id DESC LIMIT 4"; // Bisa diubah limitnya
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

      <!-- Tombol Lihat Produk Lainnya -->
      <div class="text-center mt-5">
        <a href="produk-lainnya.php" class="btn btn-lg px-4 rounded-pill" style="background-color: #3f594a; color: white;" data-aos="fade-up" data-aos-duration="500">
          View More Products
        </a>
      </div>
    </div>
  </section>



  <!-- About Us Section -->
  <section id="about-us" class="py-5 bg-light">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="display-5 fw-bold">About Us</h2>
        <hr class="mx-auto" style="width: 50px; height: 3px; background-color: #3f594a;">
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0 text-center" data-aos="fade-right" data-aos-duration="1000">
          <img src="gambar/Logo_1-removebg-preview.png" class="img-fluid rounded shadow-sm" alt="Leafly Tea Logo" style="max-width: 60%; height: auto;">
        </div>
        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="1000">
          <h3 class="fw-bold mb-3">Leafly Tea</h3>
          <p class="lead">
            Leafly Tea is a contemporary tea brand that brings authentic flavors with a modern twist. We're committed to serving high-quality teas made from carefully selected natural ingredients.
          </p>
          <p>
            With a spirit of innovation, we continuously introduce unique and refreshing flavor variants to accompany your special moments. Our teas are crafted to provide not just a beverage, but an experience.
          </p>
          <div class="mt-4">
            <a href="about-us.php" class="btn rounded-pill px-4" style="background-color: #3f594a; color: white;">
              Learn More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Brand Ambassador Section -->
  <section id="brand-ambassador" class="py-5">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="display-5 fw-bold">Brand Ambassadors</h2>
        <hr class="mx-auto" style="width: 50px; height: 3px; background-color: #198754;">
        <p class="lead text-muted">Meet the faces behind our brand</p>
      </div>
      <div class="row justify-content-center">
        <!-- Brand Ambassador 1 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
          <div class="card border-0 shadow-sm h-100 text-center p-3">
            <div class="mx-auto mb-3">
              <img src="gambar/ba1.png" class="img-fluid rounded-circle border border-3 border-success" alt="Ignatius Alden" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="card-body">
              <h4 class="fw-bold">Ignatius Alden</h4>
              <p class="text-muted mb-3">Tea Enthusiast & Content Creator</p>
              <p>"Leafly Tea brings the perfect balance of tradition and innovation to every cup."</p>
              <div class="social-icons mt-3">
                <a href="#" class="text-decoration-none me-2"><i class="bi bi-instagram text-dark fs-5"></i></a>
                <a href="#" class="text-decoration-none me-2"><i class="bi bi-twitter text-dark fs-5"></i></a>
                <a href="#" class="text-decoration-none"><i class="bi bi-youtube text-dark fs-5"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Brand Ambassador 2 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <div class="card border-0 shadow-sm h-100 text-center p-3">
            <div class="mx-auto mb-3">
              <img src="gambar/ba2.png" class="img-fluid rounded-circle border border-3 border-success" alt="Mutafiah Wirawati N., S.Pd." style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="card-body">
              <h4 class="fw-bold">Mutafiah Wirawati N., S.Pd.</h4>
              <p class="text-muted mb-3">Educator & Wellness Advocate</p>
              <p>"I find that Leafly Tea perfectly complements my busy lifestyle, offering both refreshment and focus when I need it most."</p>
              <div class="social-icons mt-3">
                <a href="#" class="text-decoration-none me-2"><i class="bi bi-instagram text-dark fs-5"></i></a>
                <a href="#" class="text-decoration-none me-2"><i class="bi bi-facebook text-dark fs-5"></i></a>
                <a href="#" class="text-decoration-none"><i class="bi bi-linkedin text-dark fs-5"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Brand Ambassador 3 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
          <div class="card border-0 shadow-sm h-100 text-center p-3">
            <div class="mx-auto mb-3">
              <img src="gambar/ba3.png" class="img-fluid rounded-circle border border-3 border-success" alt="Maria Devika Adiputri" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="card-body">
              <h4 class="fw-bold">Maria Devika Adiputri</h4>
              <p class="text-muted mb-3">Lifestyle Influencer</p>
              <p>"As someone who values quality and taste, I'm proud to represent Leafly Tea and its commitment to excellence."</p>
              <div class="social-icons mt-3">
                <a href="#" class="text-decoration-none me-2"><i class="bi bi-instagram text-dark fs-5"></i></a>
                <a href="#" class="text-decoration-none me-2"><i class="bi bi-tiktok text-dark fs-5"></i></a>
                <a href="#" class="text-decoration-none"><i class="bi bi-youtube text-dark fs-5"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section id="newsletter" class="py-5 text-white" style="background-color: #3f594a;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h3 class="fw-bold mb-3">Join Our Tea Community</h3>
          <p class="mb-4">Subscribe to our newsletter for exclusive offers, new flavor releases, and tea brewing tips.</p>
          <form class="row g-3 justify-content-center">
            <div class="col-md-8">
              <input type="email" class="form-control form-control-lg" placeholder="Your email address">
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-light btn-lg w-100">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-dark text-light py-4">
    <div class="container px-4">
      <div class="row">
        <div class="col-6 col-lg-4">
          <h3 class="pt-3 fw-bold">Leafly Tea</h3>
          <p>Teh Yang Enak Dan Nyegerin!!!</p>
          <p class="mb-0">+62 877-2522-3486</p>
          <p class="mb-0">+62 889-0558-8200</p>
        </div>
        <div class="col">
          <h4 class="pt-3 fw-bold">Menu</h4>
          <ul class="list-unstyled">
            <li><a href="error.php" class="text-decoration-none text-light">Ice Tea</a></li>
            <li><a href="error.php" class="text-decoration-none text-light">Lemon Tea</a></li>
            <li><a href="error.php" class="text-decoration-none text-light">Green Tea</a></li>
            <li><a href="error.php" class="text-decoration-none text-light">Milk Tea</a></li>
          </ul>
        </div>
        <div class="col">
          <h4 class="pt-3 fw-bold">More</h4>
          <ul class="list-unstyled">
            <li><a href="#about-us" class="text-decoration-none text-light">About Us</a></li>
            <li><a href="ba" class="text-decoration-none text-light">Brand Ambassador</a></li>
          </ul>
        </div>
        <div class="col">
          <h4 class="pt-3 fw-bold">Categories</h4>
          <ul class="list-unstyled">
            <li><a href="error.php" class="text-decoration-none text-light">Tea</a></li>
            <!-- <li><a href="error.php" class="text-decoration-none text-light">link</a></li>
                <li><a href="error.php" class="text-decoration-none text-light">link</a></li>
                <li><a href="error.php" class="text-decoration-none text-light">link</a></li> -->
          </ul>
        </div>
        <div class="col-6 col-lg-3">
          <h4 class="pt-3 fw-bold">Social Media</h4>
          <div>
            <a href="https://www.instagram.com/leafly_tea/?utm_source=ig_web_button_share_sheet" class="text-decoration-none text-light"><i class="bi bi-instagram fs-2 me-3"></i></a>
            <a href="error.php" class="text-decoration-none text-light"><i class="bi bi-facebook fs-2 me-3"></i></a>
            <a href="error.php" class="text-decoration-none text-light"><i class="bi bi-pinterest fs-2 me-3"></i></a>
          </div>
        </div>
      </div>
      <hr>
      <div class="d-flex justify-content-between">
        <p>2025 © Leafly Tea. All Right Reserved.</p>
        <div class="d-flex">
          <a href="tou.html" class="text-decoration-none text-light me-4">Term Of Use</a>
          <a href="privacy policy.html" class="text-decoration-none text-light">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!-- FOOTER -->


  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    // Initialize AOS
    AOS.init();
    // Add product card hover effects
    document.addEventListener('DOMContentLoaded', function() {
      const productCards = document.querySelectorAll('.product-card');
      productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
          this.classList.add('shadow-lg');
          this.style.transform = 'translateY(-5px)';
          this.style.transition = 'all 0.3s ease';
        });
        card.addEventListener('mouseleave', function() {
          this.classList.remove('shadow-lg');
          this.style.transform = 'translateY(0)';
        });
      });
    });
  </script>
  <script>
    const userLoggedIn = <?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>;

    document.getElementById('keranjangBtn').addEventListener('click', function() {
      if (!userLoggedIn) {
        Swal.fire({
          icon: 'warning',
          title: 'Oops!',
          text: 'Kamu harus login dulu untuk membuka keranjang!',
          confirmButtonColor: '#3f594a'
        });
      } else {
        window.location.href = 'database/produk/keranjang/tampil_keranjang.php';
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    // Ambil semua tombol dengan class btn-login-alert
    const loginButtons = document.querySelectorAll('.btn-login-alert');

    loginButtons.forEach(button => {
      button.addEventListener('click', () => {
        const produk = button.getAttribute('data-namaproduk');

        Swal.fire({
          icon: 'warning',
          title: 'Oops!',
          text: `Kamu harus login dulu untuk membeli "${produk}"`,
          confirmButtonColor: '#3f594a'
        });
      });
    });
  </script>

</body>

</html>