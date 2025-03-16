<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="asset/error.css">
<?php include 'header.php' ?>
    <video class="video-background" autoplay muted loop>
      <source src="gambar/Untitled video - Made with Clipchamp (4).mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="error">
        <font size="7">404 PAGE NOT FOUND</font><br>
        <img src="gambar/error.jpg" alt="ERROR"><br>
        <a href="index.php"><button type="button" class="btn btn-success"><i class="bi bi-arrow-clockwise"></i> Back To Homepage </button> </a>
    </div>
    <script src="japa.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
<?php include 'footer.php' ?>
</body>
</html>