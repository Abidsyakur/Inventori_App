<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Inventori</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">
    <link rel="stylesheet" href="asset/style.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap');
*{
    font-family: 'Jost', sans-serif;
}
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background-color: #14C38E;
    }
    .content {
      background-color: #85E6C5;
      border-radius: 10px;
      padding: 2rem;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    </style>
</head>

  <body>
    <div class="content" style="margin:4rem 4rem 4rem 4rem;">
          <a href="../dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="25" fill="currentColor" class="bi bi-arrow-left"  viewBox="0 0 16 16" style="color:#14C38E">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a>
          <div class="mb-3">
              <h2 class="py-3 text-center">Input Barang</h2>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="input" name="input"  >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga_barang" name="harga_barang">
          </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="jml_barang" name="jml_barang" >
          </div>
    
          <button type="button" class="btn btn-success"id="btn_simpan">Simpan</button>
          <button type="button" class="btn btn-success"id="btn_batal">batal</button>
          <p id="message_info" style="color: black;"></p>
    </div>

<script>
  $(document).ready(function(){
   $('#input').val("").focus();
   $('#input').keyup(function(e){
     var tex = $(this).val();
     if(tex !=="" && e.keyCode===13){
        $('#input').val(tex).focus();
     }
     e.preventDefault();
   });
   $('#btn_simpan').click(function(){
     let input = $('#input').val();
     let nama_barang = $('#nama_barang').val();
     let harga_barang = $('#harga_barang').val();
     let jml_barang= $('#jml_barang').val();
     if(input !=="" & nama_barang !=="" & harga_barang!=="" & jml_barang!==""){
     $.ajax({
        type: 'POST',
        url: '../controller/input_data.php',
        data: {"input":input,"nama_barang":nama_barang,"harga_barang":harga_barang,"jml_barang":jml_barang},
        beforeSend:function(response) {
          $('#message_info').html("Sedang memproses data, silahkan tunggu...");
        },
        success:function(response) {
          $('#message_info').html("");
          alert(response);
          $('#input,#nama_barang,#harga_barang,#jml_barang').val("");
          $('#input').focus();
        }
        });
     }else{
        alert("input tidak boleh kosong..");
        $('#input').focus();
     }
   });
   $('#btn_batal').click(function(){
   $('#input,#nama_barang,#harga_barang,#jml_barang').val("");
   $('#input').focus();
   });
});
</script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
  
</html>