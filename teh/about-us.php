<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Leafly Tea</title>
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
    <style>
      .gradient-bg {
        background: #3f594a
      }
      .card-hover-effect:hover {
        transform: translateY(-10px);
        transition: transform 0.3s ease;
      }
      .section-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
      }
      .section-header hr {
        width: 60px;
        height: 3px;
        background-color: #198754;
        margin: 10px auto;
      }
      .lead-text {
        font-size: 1.25rem;
        line-height: 1.8;
      }
    </style>
  </head>
  <body>
    <!-- Header inclusion with PHP -->
    <?php include "header.html"; ?>

    <!-- About Us Section -->
    <section id="about-us" class="py-5 gradient-bg text-light">
      <div class="container">
        <div class="section-header text-center mb-5">
          <h2 class="display-5 fw-bold">About Us</h2>
          <hr class="mx-auto">
        </div>
        
        <div class="row align-items-center">
          <div class="col-lg-12">
            <h3 class="fw-bold mb-4">Leafly Tea: Menyajikan Keautentikan dalam Setiap Tegukan</h3>
            <p class="lead-text">
              Leafly Tea adalah brand minuman teh kekinian yang lahir dari kecintaan terhadap keautentikan rasa dan kualitas. 
              Kami percaya bahwa setiap tegukan teh harus membawa pengalaman yang menyegarkan, menenangkan, dan memuaskan. 
              Dengan menggabungkan cita rasa tradisional dan sentuhan modern, kami menghadirkan varian teh yang unik dan berkualitas tinggi.
            </p>
            <p class="lead-text">
              Kami memulai perjalanan ini dengan satu misi sederhana: memberikan teh terbaik yang dibuat dari bahan-bahan alami pilihan. 
              Setiap produk kami dirancang untuk menemani momen spesial Anda, baik itu saat bersantai, bekerja, atau berkumpul bersama orang terkasih.
            </p>
            <p class="lead-text">
              Leafly Tea tidak hanya sekadar minuman, tetapi juga sebuah gaya hidup. Kami berkomitmen untuk terus berinovasi 
              dan menghadirkan varian rasa yang selalu segar dan menarik bagi para pecinta teh.
            </p>
            <div class="mt-4">
              <a href="index.html" class="btn btn-light rounded-pill px-4">Back to Home</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Team Section -->
    <section id="our-team" class="py-5">
      <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-down">
          <h2 class="display-5 fw-bold">Our Team</h2>
          <hr class="mx-auto">
          <p class="lead text-muted">Meet the passionate team behind Leafly Tea</p>
        </div>
        
        <div class="row justify-content-center">
          <!-- Team Member 1 -->
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="card border-0 shadow-sm h-100 text-center p-3 card-hover-effect">
              <div class="mx-auto mb-3">
                <img src="gambar/fabian.jpeg" class="img-fluid rounded-circle border border-3 border-success" alt="Fabian Rizky Pratama" style="width: 150px; height: 150px; object-fit: cover;">
              </div>
              <div class="card-body">
                <h4 class="fw-bold">Fabian Rizky Pratama</h4>
                <p class="text-muted mb-3">Co-Founder & CEO</p>
                <p>"Passionate about creating innovative tea experiences that delight our customers."</p>
              </div>
            </div>
          </div>

          <!-- Team Member 2 -->
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="card border-0 shadow-sm h-100 text-center p-3 card-hover-effect">
              <div class="mx-auto mb-3">
                <img src="gambar/abigail.jpeg" class="img-fluid rounded-circle border border-3 border-success" alt="Benedictus Abigail Triwiyatno" style="width: 150px; height: 150px; object-fit: cover;">
              </div>
              <div class="card-body">
                <h4 class="fw-bold">Benedictus Abigail Triwiyatno</h4>
                <p class="text-muted mb-3">Head of Product Development</p>
                <p>"Dedicated to crafting the perfect blend of tradition and innovation in every cup."</p>
              </div>
            </div>
          </div>

          <!-- Team Member 3 -->
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div class="card border-0 shadow-sm h-100 text-center p-3 card-hover-effect">
              <div class="mx-auto mb-3">
                <img src="gambar/juan.jpeg" class="img-fluid rounded-circle border border-3 border-success" alt="Juan Roman Requelme" style="width: 150px; height: 150px; object-fit: cover;">
              </div>
              <div class="card-body">
                <h4 class="fw-bold">Juan Roman Requelme</h4>
                <p class="text-muted mb-3">Marketing Director</p>
                <p>"Bringing the Leafly Tea experience to tea lovers everywhere."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Brand Ambassadors Section -->
    <section id="brand-ambassadors" class="py-5 bg-light">
      <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-down">
          <h2 class="display-5 fw-bold">Brand Ambassadors</h2>
          <hr class="mx-auto">
          <p class="lead text-muted">Meet the faces behind our brand</p>
        </div>
        
        <div class="row justify-content-center">
          <!-- Brand Ambassador 1 -->
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="card border-0 shadow-sm h-100 text-center p-3 card-hover-effect">
              <div class="mx-auto mb-3">
                <img src="gambar/ba1.png" class="img-fluid rounded-circle border border-3 border-success" alt="Ignatius Alden" style="width: 150px; height: 150px; object-fit: cover;">
              </div>
              <div class="card-body">
                <h4 class="fw-bold">Ignatius Alden</h4>
                <p class="text-muted mb-3">Tea Enthusiast & Content Creator</p>
                <p>"Leafly Tea brings the perfect balance of tradition and innovation to every cup."</p>
              </div>
            </div>
          </div>

          <!-- Brand Ambassador 2 -->
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="card border-0 shadow-sm h-100 text-center p-3 card-hover-effect">
              <div class="mx-auto mb-3">
                <img src="gambar/ba2.png" class="img-fluid rounded-circle border border-3 border-success" alt="Mutafiah Wirawati N., S.Pd." style="width: 150px; height: 150px; object-fit: cover;">
              </div>
              <div class="card-body">
                <h4 class="fw-bold">Mutafiah Wirawati N., S.Pd.</h4>
                <p class="text-muted mb-3">Educator & Wellness Advocate</p>
                <p>"I find that Leafly Tea perfectly complements my busy lifestyle, offering both refreshment and focus when I need it most."</p>
              </div>
            </div>
          </div>

          <!-- Brand Ambassador 3 -->
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div class="card border-0 shadow-sm h-100 text-center p-3 card-hover-effect">
              <div class="mx-auto mb-3">
                <img src="gambar/ba3.png" class="img-fluid rounded-circle border border-3 border-success" alt="Maria Devika Adiputri" style="width: 150px; height: 150px; object-fit: cover;">
              </div>
              <div class="card-body">
                <h4 class="fw-bold">Maria Devika Adiputri</h4>
                <p class="text-muted mb-3">Lifestyle Influencer</p>
                <p>"As someone who values quality and taste, I'm proud to represent Leafly Tea and its commitment to excellence."</p>
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