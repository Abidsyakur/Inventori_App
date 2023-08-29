<?php  
  include '../config/koneksi.php';
  
  if(isset($_POST["query"])){
    $output = '';
    $key = "%" . $_POST["query"] . "%";
    $query = "SELECT * FROM barang WHERE nama_barang LIKE '$key' LIMIT 10";
    $result = mysqli_query($conn, $query);

    $output = '<ul class="list-unstyled">';
    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<li>' . $row["nama_barang"] . '</li>';  
      }
    } else {
      $output .= '<li>Tidak ada yang cocok.</li>';  
    }  
    $output .= '</ul>';
    echo '<b>Autocomplete</b> : ';
    echo $output;
  }
?>
