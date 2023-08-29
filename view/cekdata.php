<!DOCTYPE html>
<html>
<head>
  <title>Inventori App</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
      padding: 20px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }
    #btn_clear {
      margin-left: 10px;
    }
    .results {
      margin-top: 20px;
      text-align: left;
      font-size: 14px;
    }
    .results table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }
    .results th, .results td {
      padding: 8px;
      border: 1px solid #ccc;
    }
    .results th {
      background-color: #14C38E;
    }
  </style>
</head>
<body>
  <div class="content">
    <a href="../dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"  style="color:#14C38E">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a>
    <h1>Cari Data</h1>
    <p>Masukkan Kode Barcode: <input type='text' id="input"></p>
    <button type="button" id="btn_clear" class="btn btn-success">Hapus</button>
    <p id="message_info"></p>
    <div class="results" id="results"></div>
  </div>

  <script>
    $(document).ready(function(){
      $('#input').val("").focus();
      $('#input').keyup(function(e){
        var tex = $(this).val();
        if(tex !=="" && e.keyCode===13){
          $('#input').val(tex).focus();
          $.ajax({
            type: 'POST',
            url: '../controller/cek.php',
            data: {"input":tex},
            beforeSend:function(response) {
              $('#message_info').html("Sedang memproses data, silahkan tunggu...");
            },
            success:function(response) {
              $('#message_info').html("");
              $('#results').html(response);
            }
          });
        }
        e.preventDefault();
      });
      $('#btn_clear').click(function(){
        $('#input').val("").focus();
        $('#results').html("");
      });
    });
  </script>
</body>
</html>
