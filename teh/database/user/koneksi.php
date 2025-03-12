<?php
// koneksi.php

$host = 'localhost';
$dbname = 'leafly';
$username_db = 'root'; // Ganti sesuai konfigurasi Anda
$password_db = '';     // Ganti sesuai konfigurasi Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>