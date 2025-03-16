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