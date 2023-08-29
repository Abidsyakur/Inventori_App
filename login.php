<?php
// Memulai sesi
session_start();

// Menyertakan file koneksi ke database
$koneksi = mysqli_connect("localhost","root","","inventori") or die();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kecocokan data pada database
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        // Data pengguna ditemukan, berhasil login
        $_SESSION['username'] = $username;
        echo '<script>alert("Login berhasil!");</script>';
        echo "<script>window.location.href = 'dashboard.php';</script>"; 
    } else {
        // Data pengguna tidak ditemukan, gagal login
        $error_message = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Iventori App</title>
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
    .login-container {
      background-color: #85E6C5;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }
    .login-container h2 {
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-control {
      border-radius: 5px;
    }
    .btn-login {
      background-color: #14C38E;
      border: none;
      border-radius: 5px;
      color: #fff;
      width: 100%;
    }
    .btn-login:hover {
      background-color: green;
    }
  </style>
</head>
<body>

<!-- form login -->
  <div class="login-container">
    <h2>Login</h2>
    <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="post" action="">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="username" requ>
      </div>
      <button type="submit" class="btn btn-login" name="login">Login</button>
    </form>

    <p>belum punya akun? <a href="signup.php">sign up</a></p>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
