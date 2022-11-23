
<?php

require '../koneksi.php';

$conn = mysqli_query($conn, "SELECT * FROM produk");

?>
<?php require '../layout/sidebar.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-10 my-3">
            <h2>Data Produk</h2>
            <div class="mb-3"><button type="button" class="btn btn-primary">Tambah Produk</button></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col">Foto Produk</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="align-middle">1</th>
                            <td class="align-middle">Printer HP Laserjet</td>
                            <td class="align-middle">Rp. 725.000</td>
                            <td><img src="assets/image.jfif" class="image-table" alt=""></td>
                            <td><button type="button" class="btn btn-success">Edit Produk</button> <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                        </tr>
                        <tr>
                        <th scope="row" class="align-middle">2</th>
                            <td class="align-middle">Printer Deskjet</td>
                            <td class="align-middle">Rp. 839.000</td>
                            <td><img src="assets/image.jfif" class="image-table" alt=""></td>
                            <td><button type="button" class="btn btn-success">Edit Produk</button> <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                        </tr>
                        <tr>
                            <th scope="row" class="align-middle">3</th>
                            <td class="align-middle">Printer Epson</td>
                            <td class="align-middle">Rp. 699.000</td>
                            <td><img src="assets/image.jfif" class="image-table" alt=""></td>
                            <td><button type="button" class="btn btn-success">Edit Produk</button> <button type="button" class="btn btn-danger">Hapus Produk</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>