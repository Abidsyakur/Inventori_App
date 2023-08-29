<?php
$koneksi = mysqli_connect("localhost","root","","inventori") or die();
$username = $_POST['username'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$sql = mysqli_query($koneksi,"INSERT INTO admin(username,email,nama,password) values('$username','$email','$nama','$password')");
if($sql){
    echo '<script>alert("Register berhasil!");</script>';
    echo "<script>window.location.href = '../login.php';</script>";
}else{
    echo '<script>alert("Register Gagal!");</script>';
    echo '<script>window.location.href = "../signup.php";</script>';
}
?>