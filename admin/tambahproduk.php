<?php 
session_start();
require 'functions.php';


if(isset($_POST["kirim"])){
    if(tambahproduk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Produk berhasil ditambahkan');
            window.location = '../admin/tambahproduk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = '../admin/tambahproduk.php';
        </script>
    ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">
    <h3>Tambah Produk</h3>
   <form action="" method="POST" enctype="multipart/form-data">
        
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="NamaProduk" id="nama_produk" class="form-control"> <br />

        <label for="harga">Harga</label>
        <input type="text" name="Harga" id="harga" class="form-control"> 

        <label for="foto">Stok</label>
        <input type="foto" name="Stok" id="foto" class="form-control">
      
        <label for="Foto">Foto</label>
        <input type="file" name="Foto" id="foto" class="form-control">
      
        <label for="foto">Deskripsi</label>
        <input type="foto" name="Deskripsi" id="foto" class="form-control">

        <button type="submit" name="kirim">tambah</button>
    </form>

 </div>
</div>