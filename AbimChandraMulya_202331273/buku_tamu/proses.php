<?php
include 'koneksi.php';

if (!isset($koneksi)) {
    die("Koneksi ke database gagal.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $koneksi->real_escape_string($_POST['nama']);
    $email = $koneksi->real_escape_string($_POST['email']);
    $isi = $koneksi->real_escape_string($_POST['isi']);

    $sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$isi')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil disimpan! <a href='lihat.php'>Lihat Data</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>
