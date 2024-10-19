<?php
$host = 'localhost'; // Sesuaikan jika berbeda
$user = 'root'; // Sesuaikan dengan username phpMyAdmin (default root)
$password = ''; // Sesuaikan dengan password phpMyAdmin (kosongkan jika default)
$dbname = 'kalende_fisipconnect'; // Nama database yang kamu buat di phpMyAdmin

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
