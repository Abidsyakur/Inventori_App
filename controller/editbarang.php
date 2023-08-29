<?php
include '../config/koneksi.php';
$id_barang = $_POST['id_barang'];
$kode_barang = $_POST['input'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$jml_barang = $_POST['jml_barang'];
$sql = mysqli_query($conn,"UPDATE barang SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', harga_barang = '$harga_barang', jml_barang = '$jml_barang' WHERE id_barang = '$id_barang' ");
if($sql){
    echo 'berhasil di edit';
}else{
    echo '<script>alert("Edit Gagal!");</script>';
   echo "<script>window.location.href = '../view/editBarang.php';</script>"; 
}
?>