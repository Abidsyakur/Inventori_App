<?php

session_start();
$koneksi = mysqli_connect("localhost","root","","inventori") or die();
$kode_barang = $_POST['input'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$jml_barang = $_POST['jml_barang'];
$sql = mysqli_query($koneksi,"INSERT INTO barang(kode_barang,nama_barang,harga_barang,jml_barang) values('$kode_barang','$nama_barang','$harga_barang','$jml_barang')");
if($sql){
   $_SESSION['kode_barang'] = $kode_barang;
   echo '<script>alert("Input berhasil!");</script>';
   echo "<script>window.location.href = '../view/stokbarang.php';</script>";
}else{
   echo '<script>alert("Input gagal!");</script>';
   echo "<script>window.location.href = '../view/AddBarang.php';</script>";
}
?>