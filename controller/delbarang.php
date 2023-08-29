<?php
include '../config/koneksi.php';
$id_barang = $_GET['id'];
$data = mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id_barang' ");
if($data){
    echo '<script>alert("Berhasil dihapus!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/stokbarang.php">';
}else{
    echo "failed";
}


?>