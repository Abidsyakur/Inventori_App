<!DOCTYPE html>
<html>
<head>
  <title>Inventori App</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    .signup-container {
      background-color: #85E6C5;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }
    .signup-container h2 {
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-control {
      border-radius: 5px;
    }
    .btn-signup {
      background-color: #28a745;
      border: none;
      border-radius: 5px;
      color: #fff;
      width: 100%;
    }
    .btn-signup:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Sign Up</h2>
    <form action="controller/register.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
      </div>
      <div class="form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
        </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-signup">Sign Up</button>
    </form>
    <p>Sudah punya akun ? <a href="login.php">Login</a></p>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
