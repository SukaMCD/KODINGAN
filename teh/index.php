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
</head>

<body>
  <!-- Header inclusion with PHP -->
  <?php include "header.html"; ?>

  <!-- Hero Carousel -->
  <section class="hero-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="8000">
          <img src="gambar/11.png" class="d-block w-100" alt="Leafly Tea Showcase" />
        </div>
        <div class="carousel-item" data-bs-interval="8000">
          <img src="gambar/12.png" class="d-block w-100" alt="Leafly Tea Products" />
        </div>
        <div class="carousel-item" data-bs-interval="8000">
          <img src="gambar/13.png" class="d-block w-100" alt="Leafly Tea Experience" />
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
  <section class="best-seller py-5" id="best-seller">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="display-5 fw-bold">BEST SELLER PRODUCTS</h2>
        <hr class="mx-auto" style="width: 50px; height: 3px; background-color: #198754;">
        <p class="lead text-muted">Discover our most popular tea selections</p>
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
                <span class="fs-5 fw-bold">Rp7.000,00</span>
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
        <hr class="mx-auto" style="width: 50px; height: 3px; background-color:  #3f594a;">
      </div>

      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0 text-center" data-aos="fade-right" data-aos-duration="1000">
          <img src="gambar/Logo_1-removebg-preview.png"
            class="img-fluid rounded shadow-sm"
            alt="Leafly Tea Logo"
            style="max-width: 60%; height: auto;">
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
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

  <!-- Testimonials Section -->
  <section id="testimonials" class="py-5 bg-light">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="display-5 fw-bold">Customer Testimonials</h2>
        <hr class="mx-auto" style="width: 50px; height: 3px; background-color: #198754;">
        <p class="lead text-muted">What our customers say about us</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <div class="testimonial-item text-center p-4">
                  <div class="testimonial-img mb-3">
                    <img src="/api/placeholder/80/80" class="rounded-circle border border-3 border-success" alt="Customer 1">
                  </div>
                  <h5 class="fw-bold">Dian Sastro</h5>
                  <p class="text-muted mb-3">Jakarta</p>
                  <div class="rating mb-3">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p class="fst-italic">"Leafly's Matcha is now my daily ritual. The quality is exceptional and the taste is perfectly balanced. I can't start my day without it!"</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <div class="testimonial-item text-center p-4">
                  <div class="testimonial-img mb-3">
                    <img src="/api/placeholder/80/80" class="rounded-circle border border-3 border-success" alt="Customer 2">
                  </div>
                  <h5 class="fw-bold">Andi Firmansyah</h5>
                  <p class="text-muted mb-3">Surabaya</p>
                  <div class="rating mb-3">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-half text-warning"></i>
                  </div>
                  <p class="fst-italic">"The Lemon Tea from Leafly is incredibly refreshing. I've tried many brands but this one has the perfect balance of tea strength and citrus flavor."</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <div class="testimonial-item text-center p-4">
                  <div class="testimonial-img mb-3">
                    <img src="/api/placeholder/80/80" class="rounded-circle border border-3 border-success" alt="Customer 3">
                  </div>
                  <h5 class="fw-bold">Siti Nurhaliza</h5>
                  <p class="text-muted mb-3">Bandung</p>
                  <div class="rating mb-3">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p class="fst-italic">"Milk Tea from Leafly has become my favorite afternoon treat. It's creamy, perfectly sweetened, and has authentic tea flavor that other brands just can't match."</p>
                </div>
              </div>
            </div>
            <div class="carousel-indicators position-relative mt-3">
              <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active bg-success" aria-current="true" aria-label="Testimonial 1"></button>
              <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" class="bg-success" aria-label="Testimonial 2"></button>
              <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" class="bg-success" aria-label="Testimonial 3"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section id="newsletter" class="py-5 bg-success text-white">
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

  <!-- Footer inclusion with PHP -->
  <?php include "footer&js.html"; ?>

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
</body>

</html>