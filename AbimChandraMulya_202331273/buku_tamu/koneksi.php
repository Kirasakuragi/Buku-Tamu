<?php
$host = "localhost";
$user = "root";
$password = "abim123";
$database = "buku_tamu";

// Membuat koneksi
$koneksi = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
