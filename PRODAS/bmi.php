<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
</head>
<body>
    <h1>Kalkulator BMI</h1>
    
    <!-- Formulir untuk input berat badan dan tinggi badan -->
    <form method="post" action="">
        <label for="berat">Berat Badan (kg):</label>
        <input type="number" id="berat" name="berat" step="0.1" required><br><br>
        
        <label for="tinggi">Tinggi Badan (m):</label>
        <input type="number" id="tinggi" name="tinggi" step="0.01" required><br><br>
        
        <input type="submit" value="Hitung BMI">
    </form>

    <?php
    // Fungsi untuk menghitung BMI
    function hitungBMI($berat, $tinggi) {
        if ($tinggi <= 0) {
            return "Tinggi badan tidak boleh nol atau kurang.";
        }
        $bmi = $berat / ($tinggi * $tinggi);
        return $bmi;
    }

    // Memproses data setelah formulir dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari formulir
        $berat = $_POST['berat'];
        $tinggi = $_POST['tinggi'];
        
        // Validasi input
        if ($berat > 0 && $tinggi > 0) {
            // Hitung BMI
            $bmi = hitungBMI($berat, $tinggi);
            echo "<h2>Hasil BMI Anda:</h2>";
            echo "BMI Anda adalah: " . number_format($bmi, 2);
        } else {
            echo "<h2>Error:</h2>";
            echo "Berat badan dan tinggi badan harus lebih besar dari nol.";
        }
    }
    ?>
</body>
</html>