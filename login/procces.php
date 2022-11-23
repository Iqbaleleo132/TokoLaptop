<?php 

require '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["role"] == "admin"){
        session_start();

        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = $data["password"];
        header("Location: ../admin/admin.php");
    }else if($data["role"] == "customer"){ 
        session_start();

        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = $data["password"];

        header("Location: ../haluser.php");   
    }
}else{
    echo '
        <script type="text/javascript">
            alert("Akun tidak ditemukan");
            window.location: "index.php";
        </script>
    ';
}





?>