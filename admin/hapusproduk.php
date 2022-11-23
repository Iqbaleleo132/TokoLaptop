
<?php
require 'functions.php';

$id= $_GET["id"];

if(hapusProduk($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data Produk berhasil dihapus')
        window.location= 'dataproduk.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data Produk gagal dihapus')
        window.location= 'dataproduk.php';
    </script>
";
    
}


?>



