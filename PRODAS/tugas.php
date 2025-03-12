<?php
echo "<b>Soal 1 = Variabel </b><br>";

$nama = "Fabian Rizky Pratama";
$umur = 15;
$pekerjaan = "Siswa";

echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Pekerjaan: " . $pekerjaan . "<br><br>";


echo "<b>Soal 2: If-Else</b><br>";

$nilai = 80;

if ($nilai >= 75) {
    echo "Lulus<br><br>";
} else {
    echo "Tidak Lulus<br><br>";
}

echo"<b>Soal 3: Operator aritmatika</b><br>";

$a = 10;
$b = 20;
$hasil = $a + $b;
echo "Hasil Penjumlahan: $hasil<br><br>";

echo "<b>Soal 4: If-Else dengan Operator Aritmatika</b><br>";

$bilangan = 6;

if ($bilangan % 2 == 0) {
    echo "Bilangan genap<br><br>";
} else {
    echo "Bilangan ganjil<br><br>";
}

echo "<b>Soal 5: If-Else Bersarang</b><br>";

$nilai = 100;

if ($nilai >= 85) {
    echo "Nilai: A<br><br>";
} elseif ($nilai >= 70 && $nilai <=84) {
    echo "Nilai: B<br><br>";
} elseif ($nilai >= 55 && $nilai<=69) {
    echo "Nilai: C<br><br>";
} elseif ($nilai <=55) 
{
    echo "Nilai: D<br><br>";
}

echo "<b>Soal 6: Penggunaan Variabel dan Operator Aritmatika</b><br>";

$panjang = 10;
$lebar = 5;
$luas = $panjang * $lebar;

echo "Luas persegi panjang: " . $luas . " m²<br><br>";

echo "<b>Soal 7: Penggunaan If-Else dengan Variabel</b><br>";

$umur = 17;

if ($umur >= 18) {
    echo "Dewasa<br><br>";
} else {
    echo "Belum Dewasa<br><br>";
}

echo "<b>Soal 8: Operator Aritmatika dan If-Else</b><br>";

$angka1 = 10;
$angka2 = 5;
$operator = '*';

if ($operator == '+') {
    $hasil = $angka1 + $angka2;
} elseif ($operator == '-') {
    $hasil = $angka1 - $angka2;
} elseif ($operator == '*') {
    $hasil = $angka1 * $angka2;
} elseif ($operator == '/') {
    $hasil = $angka1 / $angka2;
} else {
    $hasil = "Operator tidak valid";
}

echo "Hasil: " . $hasil;

echo "<br><b><br>Soal 9: Menghitung Diskon Belanja</b><br>";

$total_belanja = 1200000;

if ($total_belanja > 1000000) {
    $diskon = 0.20;
} elseif ($total_belanja > 500000) {
    $diskon = 0.10;
} else {
    $diskon = 0;
}

$total_setelah_diskon = $total_belanja - ($total_belanja * $diskon);

echo "Total yang harus dibayar: Rp " . $total_setelah_diskon;

echo "<br><b><br>Soal 10: Menghitung Kelulusan Siswa</b><br>";

$nilai_matematika = 80;
$nilai_bahasa_indonesia = 85;
$nilai_bahasa_inggris = 70;

$rata_rata = ($nilai_matematika + $nilai_bahasa_indonesia + $nilai_bahasa_inggris) / 3;

if ($rata_rata >= 75 && $nilai_matematika >= 60 && $nilai_bahasa_indonesia >= 60 && $nilai_bahasa_inggris >= 60) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
?>