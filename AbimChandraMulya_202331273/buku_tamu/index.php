<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Buku Tamu</h1>
    <form action="proses.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="isi">Isi Pesan:</label><br>
        <textarea id="isi" name="isi" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
