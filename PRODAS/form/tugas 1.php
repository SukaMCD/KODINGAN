<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="tugas.css">
    <script>
        // Fungsi untuk mencegah form dari aksi default
        function preventFormSubmit(event) {
            event.preventDefault();
        }

        // Event listener untuk menangani enter key pada form
        document.addEventListener('DOMContentLoaded', function() {
        const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('keydown', function(event) {
                    if (event.key === 'Enter') {
                        preventFormSubmit(event);
                    }
                });
            });
        });
    </script>
</head>
<body>
<link rel="stylesheet" href="tugas.css">
<div class="container">
    <h1>Informasi Pribadi</h1>
    <form method="post">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" required>
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan:</label>
            <input type="text" id="pekerjaan" name="pekerjaan" required>
        </div>
        <button type="submit">Tampilkan Informasi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama']) && isset($_POST['umur']) && isset($_POST['pekerjaan'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $pekerjaan = $_POST['pekerjaan'];

        echo "<div class='result'>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Umur:</strong> $umur tahun</p>";
        echo "<p><strong>Pekerjaan:</strong> $pekerjaan</p>";
        echo "</div>";
    }
    ?>
</div>

<div class="container">
    <h1>Status Kelulusan</h1>
    <form method="post">
        <div class="form-group">
            <label for="nilai">Masukkan Nilai:</label>
            <input type="number" id="nilai" name="nilai" min="0" max="100" required>
        </div>
        <button type="submit">Cek Kelulusan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nilai'])) {
        // Mendapatkan nilai dari form
        $nilai = $_POST['nilai'];

        // Memeriksa kelulusan
        if ($nilai >= 75) {
            $status = "<span class='lulus'>Lulus</span>";
        } else {
            $status = "<span class='tidak-lulus'>Tidak Lulus</span>";
        }

        // Menampilkan hasil
        echo "<div class='result'>Nilai Anda: $nilai<br>Status Kelulusan: $status</div>";
    }
    ?>
</div>

<div class="container">
    <h1>Hasil Penjumlahan</h1>
    <form method="post">
        <div class="form-group">
            <label for="a">Nilai a:</label>
            <input type="number" id="a" name="a" required>
        </div>
        <div class="form-group">
            <label for="b">Nilai b:</label>
            <input type="number" id="b" name="b" required>
        </div>
        <button type="submit">Hitung Penjumlahan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $hasil = $a + $b;

        echo "<div class='result'>";
        echo "Nilai a: <span class='highlight'>$a</span><br>";
        echo "Nilai b: <span class='highlight'>$b</span><br>";
        echo "Hasil penjumlahan: <span class='highlight'>$hasil</span>";
        echo "</div>";
    }
    ?>
</div>

<div class="container">
    <h1>Pemeriksaan Genap atau Ganjil</h1>
    <form method="post">
        <div class="form-group">
            <label for="bilangan">Masukkan Bilangan:</label>
            <input type="number" id="bilangan" name="bilangan" required>
        </div>
        <button type="submit">Cek Bilangan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['bilangan'])) {
        $bilangan = $_POST['bilangan'];

        if ($bilangan % 2 == 0) {
            $status = "<span class='highlight'>Genap</span>";
        } else {
            $status = "<span class='highlight'>Ganjil</span>";
        }

        echo "<div class='result'>Bilangan yang Anda masukkan: $bilangan<br>Status: $status</div>";
    }
    ?>
</div>

<div class="container">
    <h1>Kategori Nilai</h1>
    <form method="post">
        <div class="form-group">
            <label for="nilai">Masukkan Nilai:</label>
            <input type="number" id="nilai" name="nilai" min="0" max="100" required>
        </div>
        <button type="submit">Cek Kategori</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nilai'])) {
        // Mendapatkan nilai dari form
        $nilai = $_POST['nilai'];

        // Menentukan kategori nilai menggunakan if-else bersarang
        if ($nilai >= 85) {
            $kategori = "<span class='grade-a'>A</span>";
        } else {
            if ($nilai >= 70) {
                $kategori = "<span class='grade-b'>B</span>";
            } else {
                if ($nilai >= 55) {
                    $kategori = "<span class='grade-c'>C</span>";
                } else {
                    $kategori = "<span class='grade-d'>D</span>";
                }
            }
        }

        // Menampilkan hasil
        echo "<div class='result'>Nilai Anda: $nilai<br>Kategori: $kategori</div>";
    }
    ?>
</div>

<div class="container">
    <h1>Penghitungan Luas Persegi Panjang</h1>
    <form method="post">
        <div class="form-group">
            <label for="panjang">Panjang:</label>
            <input type="number" id="panjang" name="panjang" required>
        </div>
        <div class="form-group">
            <label for="lebar">Lebar:</label>
            <input type="number" id="lebar" name="lebar" required>
        </div>
        <button type="submit">Hitung Luas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['panjang']) && isset($_POST['lebar'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $luas = $panjang * $lebar;

        echo "<div class='result'>Luas persegi panjang dengan panjang <strong>$panjang</strong> dan lebar <strong>$lebar</strong> adalah <strong>$luas</strong>.</div>";
    }
    ?>
</div>


<div class="container">
    <h1>Pengujian Umur</h1>
    <form method="post" onkeydown="return preventEnter(event)">
        <div class="form-group">
            <label for="umur">Masukkan Umur:</label>
            <input type="number" id="umur" name="umur" required>
        </div>
        <button type="submit">Cek Umur</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['umur'])) {
        $umur = $_POST['umur'];

        if ($umur == 1) {
            $pesan = "Baru Lahir";
        } elseif ($umur >= 18) {
            $pesan = "Dewasa";
        } else {
            $pesan = "Belum Dewasa";
        }

        echo "<div class='result'>Umur Anda adalah <strong>$umur</strong>. Status: <strong>$pesan</strong>.</div>";
    }
    ?>
</div>

<div class="container">
<h1>Kalkulator Sederhana</h1>
    <form method="post">
        <div class="form-group">
            <label for="angka1">Angka 1:</label>
            <input type="number" id="angka1" name="angka1" required>
        </div>
        <div class="form-group">
            <label for="angka2">Angka 2:</label>
            <input type="number" id="angka2" name="angka2" required>
        </div>
        <div class="form-group">
            <label for="operator">Operator:</label>
            <select id="operator" name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])) {
        // Mendapatkan nilai dari form
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        
        // Menghitung hasil berdasarkan operator    
        if ($operator == '+') {
            $hasil = $angka1 + $angka2;
        } elseif ($operator == '-') {
            $hasil = $angka1 - $angka2;
        } elseif ($operator == '*') {
            $hasil = $angka1 * $angka2;
        } elseif ($operator == '/') {
            // Menghindari pembagian dengan nol
            if ($angka2 != 0) {
                $hasil = $angka1 / $angka2;
            } else {
                $hasil = "Error: Pembagian dengan nol tidak diperbolehkan.";
            }
        } else {
            $hasil = "Operator tidak valid.";
        }

        // Menampilkan hasil
        echo "<div class='result'>Hasil dari $angka1 $operator $angka2 adalah: <strong>$hasil</strong></div>";
    }
    ?>
</div>

<div class="container">
    <h1>Perhitungan Diskon Belanja</h1>
    <form method="post">
        <div class="form-group">
            <label for="total">Total Belanja (Rp):</label>
            <input type="number" id="total" name="total" required>
        </div>
        <button type="submit">Hitung Diskon</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['total'])) {
        // Mendapatkan nilai total belanja dari form
        $totalBelanja = $_POST['total'];
        
        // Menentukan diskon berdasarkan total belanja
        if ($totalBelanja > 1000000) {
            $diskon = 0.20; // Diskon 20%
        } elseif ($totalBelanja > 500000) {
            $diskon = 0.10; // Diskon 10%
        } else {
            $diskon = 0.00; // Tidak ada diskon
        }
        
        // Menghitung jumlah diskon dan total pembayaran setelah diskon
        $jumlahDiskon = $totalBelanja * $diskon;
        $totalPembayaran = $totalBelanja - $jumlahDiskon;

        // Menampilkan hasil
        echo "<div class='result'>Total belanja sebelum diskon: Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
        echo "Diskon: Rp " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
        echo "Total yang harus dibayar setelah diskon: Rp " . number_format($totalPembayaran, 0, ',', '.') . "</div>";
    }
    ?>
</div>

<div class="container">
    <h1>Penghitungan Kelulusan Siswa</h1>
    <form method="post">
        <div class="form-group">
            <label for="matematika">Nilai Matematika:</label>
            <input type="number" id="matematika" name="matematika" min="0" max="100" required>
        </div>
        <div class="form-group">
            <label for="bahasa_indonesia">Nilai Bahasa Indonesia:</label>
            <input type="number" id="bahasa_indonesia" name="bahasa_indonesia" min="0" max="100" required>
        </div>
        <div class="form-group">
            <label for="bahasa_inggris">Nilai Bahasa Inggris:</label>
            <input type="number" id="bahasa_inggris" name="bahasa_inggris" min="0" max="100" required>
        </div>
        <button type="submit">Cek Kelulusan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['matematika']) && isset($_POST['bahasa_indonesia']) && isset($_POST['bahasa_inggris'])) {
       
        $matematika = $_POST['matematika'];
        $bahasaIndonesia = $_POST['bahasa_indonesia'];
        $bahasaInggris = $_POST['bahasa_inggris'];

        $rataRata = ($matematika + $bahasaIndonesia + $bahasaInggris) / 3;

        if ($rataRata >= 75 && $matematika >= 60 && $bahasaIndonesia >= 60 && $bahasaInggris >= 60) {
            $hasil = "Lulus";
        } else {
            $hasil = "Tidak Lulus";
        }

        // Menampilkan hasil
        echo "<div class='result'>Nilai Matematika: $matematika<br>";
        echo "Nilai Bahasa Indonesia: $bahasaIndonesia<br>";
        echo "Nilai Bahasa Inggris: $bahasaInggris<br>";
        echo "Rata-rata Nilai: " . number_format($rataRata, 2) . "<br>";
        echo "Status Kelulusan: <strong>$hasil</strong></div>";
    }
    ?>
</div>

</body>
</html>