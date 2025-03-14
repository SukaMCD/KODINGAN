<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level    = $_POST['level'];

// CEK apakah username sudah ada
$cek_username = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

if (mysqli_num_rows($cek_username) > 0) {
    // Username sudah digunakan
    echo "<script>
            alert('Username \"$username\" sudah digunakan, silahkan gunakan username lain!');
            window.location.href='tambah.php';
          </script>";
} else {
    // Kalau belum ada, baru insert
    $query = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', '$level')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('User \"$username\" berhasil ditambahkan!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
