<?php

if(isset($_POST['search'])) {
    include "../config/koneksi.php";
    $no = 1;
    $search = $_POST['search'];
    $data = mysqli_query($conn, "SELECT * FROM barang WHERE nama_barang LIKE '%".$search."%' ");
    while($d = mysqli_fetch_array($data)) {

?>

<div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title"><?=$d['nama_barang']?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Jumlah: <?=$d['jml_barang']?></h6>
                <p class="card-text">Rp.<?=$d['harga_barang']?></p>
                <a href="../view/editBarang.php?id='.$d['id_barang'].'" class="card-link">
                  <!-- Edit icon SVG code here -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" style="color:#14C38E">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
              </svg>
                </a>
                <a href="../controller/delbarang.php?id='.$d['id_barang'].'" class="card-link">
                  <!-- Delete icon SVG code here -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="color:#14C38E">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
              </svg>
                </a>
              </div>
            </div>`
</div>

<?php } } ?>