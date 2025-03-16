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