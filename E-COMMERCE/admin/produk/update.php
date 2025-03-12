<?php
include 'koneksi.php';

$id = $_POST['id']; 
$nama_barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga']; // This is now the only price variable
$kualitas = $_POST['kualitas'];
$kemasan = $_POST['kemasan'];
$gambar_produk = $_FILES['gambar_produk']['name'];

if ($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);

        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE produk SET nama_barang = '$nama_barang', deskripsi = '$deskripsi', stok = '$stok', kategori = '$kategori', harga = '$harga', kualitas = '$kualitas', kemasan = '$kemasan', gambar_produk = '$nama_gambar_baru' ";
        $query  .= "WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);

        // periksa query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            // tampil alert dan akan redirect ke halaman index.php
            echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
    }
} else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE produk SET nama_barang = '$nama_barang', deskripsi = '$deskripsi', stok = '$stok', kategori = '$kategori', harga = '$harga', kualitas = '$kualitas', kemasan = '$kemasan' ";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    // periksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        // tampil alert dan akan redirect ke halaman index.php
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
}
