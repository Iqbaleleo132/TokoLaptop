<?php

require 'koneksi.php';

$conn = mysqli_query($conn, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>SELAMAT DATANG DI TOKO LAPTOP SINAR JAYA</h1>
        <a href="login/index.php">Klik Disini Untuk Ganti Akun</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>No</td>
            <td>Nama produk</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>Foto</td>
            <td>Deskripsi</td>
        </tr>
    <?php $i= 1; ?>
        <?php while($data = mysqli_fetch_array($conn)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["NamaProduk"]; ?></td>
            <td><?= $data["Harga"]; ?></td>
            <td><?= $data["Stok"]; ?></td>
            <td><img src="<?= $data["Foto"]; ?>" alt="" width="80px"></td>
            <td><?= $data["Deskripsi"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ;?>
    </table>
        </center>
</body>
</html>