<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leafly Tea - Produk Lainnya</title>
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
  </head>
  <body>
    <!-- Header inclusion with PHP -->
    <?php include "header.html"; ?>

    <!-- Produk Lainnya Section -->
    <section class="produk-lainnya py-5">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="display-5 fw-bold">Produk Lainnya</h2>
          <hr class="mx-auto" style="width: 50px; height: 3px; background-color: #198754;">
          <p class="lead text-muted">Temukan lebih banyak varian teh premium dari Leafly Tea</p>
        </div>
        
        <div class="row g-4 justify-content-center">
          <!-- Matcha Tea Card -->
        <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="800">
          <div class="card h-100 border-0 overflow-hidden shadow product-card">
            <div class="product-img-container">
              <img src="gambar/Desain_tanpa_judul__5_-removebg-preview.jpg" class="card-img-top" alt="Matcha Tea">
            </div>
            <div class="card-body text-light" style="background-color: #3f594a;">
              <h5 class="card-title fw-bold">Green Tea</h5>
              <hr>
              <p class="card-text">Premium Japanese green tea with a rich, earthy flavor and smooth finish. Perfect for an energy boost.</p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <span class="fs-5 fw-bold">Rp6.000,00</span>
                <a href="#" class="btn btn-light">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Lemon Tea Card -->
        <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="800">
          <div class="card h-100 border-0 overflow-hidden shadow product-card">
            <div class="product-img-container">
              <img src="gambar/Desain_tanpa_judul__5_-removebg-preview.png" class="card-img-top" alt="Lemon Tea">
            </div>
            <div class="card-body text-light" style="background-color: #3f594a;">
              <h5 class="card-title fw-bold">Lemon Tea</h5>
              <hr>
              <p class="card-text">Refreshing black tea infused with zesty lemon for a bright, citrusy flavor that's perfect any time of day.</p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <span class="fs-5 fw-bold">Rp7.000,00</span>
                <a href="#" class="btn btn-light">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Ice Tea Card -->
        <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="800">
          <div class="card h-100 border-0 overflow-hidden shadow product-card">
            <div class="product-img-container">
              <img src="gambar/s118465655369280292_p154_i4_w600__1_-removebg-preview.png" class="card-img-top" alt="Ice Tea">
            </div>
            <div class="card-body text-light" style="background-color: #3f594a;">
              <h5 class="card-title fw-bold">Ice Tea</h5>
              <hr>
              <p class="card-text">Classic cold-brewed tea that's perfectly sweetened and deeply refreshing. Ideal for hot days.</p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <span class="fs-5 fw-bold">Rp5.000,00</span>
                <a href="#" class="btn btn-light">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Milk Tea Card -->
        <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="800">
          <div class="card h-100 border-0 overflow-hidden shadow product-card">
            <div class="product-img-container">
              <img src="gambar/Desain_tanpa_judul__6_-removebg-preview.png" class="card-img-top" alt="Milk Tea">
            </div>
            <div class="card-body text-light" style="background-color: #3f594a;">
              <h5 class="card-title fw-bold">Milk Tea</h5>
              <hr>
              <p class="card-text">Creamy milk tea with a perfect balance of robust tea flavor and smooth dairy richness.</p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <span class="fs-5 fw-bold">Rp7.000,00</span>
                <a href="#" class="btn btn-light">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </section>

    <!-- Footer inclusion with PHP -->
    <?php include "footer&js.html"; ?>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      // Initialize AOS
      AOS.init();
    </script>
  </body>
</html>