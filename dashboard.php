<?php
include 'config/koneksi.php';
session_start();

if(isset($_SESSION['username'])){
  $username =  $_SESSION['username'];
  $query = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$username'");
  $result = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>Inventori App</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap');
*{
    font-family: 'Jost', sans-serif;
}
  body{
    background-color: #14C38E;
  }
  .container {
  background-color: #85E6C5;
  padding: 20px;
  border-radius: 20px;
}

.row {
  margin-top: 20px;
}

.navbar {
  padding: 10px;
}

.right-column {
  padding: 20px;
}

img {
  max-width: 100%;
  height: auto;
}

h3 {
  font-size: 65px;
  margin-left: 2rem;
  margin-top:5rem;
  margin-bottom: 10px;
}

p {
  font-size: 16px;
}

</style>
<body>
  <div class="container mt-5 custom-shadow">
    <div class="d-flex justify-content-between">
      <nav class="navbar navbar-light bg-transparent">
        <a class="navbar-brand" href="#">Inventori App</a>
      </nav>
      <nav class="navbar navbar-light bg-transparent">
        <a class="navbar-brand" href="view/AddBarang.php">Input Barang</a>
      </nav>
      <nav class="navbar navbar-light bg-transparent">
        <a class="navbar-brand" href="view/cekdata.php">Cek Barang</a>
      </nav>
      <!-- Tambahkan navbar baru di sini -->
      <nav class="navbar navbar-light bg-transparent">
        <a class="navbar-brand" href="view/stokbarang.php">Stok Barang</a>
      </nav>
    </div>
    <div class="row mt-4">
      <div class="col-md-6">
        <img src="asset/content.png" class="img-fluid" alt="Image">
      </div>
      <div class="col-md-6">
        <h3>Selamat Datang <?=$result['nama']?> di Aplikasi Inventoris</h3>
      </div>
    </div>
  </div>
</body>
</html>
