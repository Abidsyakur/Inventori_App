<?php
$koneksi=mysqli_connect("localhost","root","","inventori") or die();
$kode_barang=trim($_POST['input']);
$cari=mysqli_query($koneksi,"SELECT * FROM barang WHERE kode_barang='$kode_barang' ");
$jml=mysqli_num_rows($cari);
if($jml>0){
   $data=mysqli_fetch_array($cari);
   echo "<p><b>Hasil Pencarian Barang</b><br> Kode Barcode : $data[kode_barang]</p>";
   echo "<table class='table_content'>";
   echo "<tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga Barang</th><th>Jumlah</th></tr>";
   echo "<tr><td>".$data['kode_barang']." </td><td> ".$data['nama_barang']."</td><td>".$data['harga_barang']."</td><td>".$data['jml_barang']."</td></tr>";
   echo "</table>";
}else{
   echo "<p class='error'>Data tidak ditemukan</p>";
}
?>