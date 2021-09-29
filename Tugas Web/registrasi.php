<?php
session_start();

/*Nama  : Fina Maulidiyah N
  NIM   : 19051397034
  Prodi : D4 MI 19A*/

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
  // code...
}

require 'functions.php';
require 'emailController.php';

if (isset($_POST["submit"])) {
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password2=$_POST['password2'];
  $level=$_POST['level'];

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
      echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
            </script>";
    }
  $sql = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($sql)) {
      echo "<script>
            alert('email sudah terdaftar!');
            document.location.href = 'registrasi.php';
            </script>";
    
    } else
      if ($password == $password2) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
                document.location.href = 'verifikasiemail.php';
               </script>";

        $password = password_hash($password, PASSWORD_DEFAULT);

        $token = md5(rand('10000', '99999'));
        $verified = false;

        $sql = mysqli_query($conn, "INSERT INTO user (username, email, verified, token, password, level) VALUES('$username', '$email', '', '$token', '$password', '$level')");

        sendVerificationEmail($email, $token);

      } else if($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
            </script>";
      }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <title>Halaman Registrasi</title>

  <style type="text/css">
    body {
      background: #CCFFCC;
      background-repeat: no-repeat;
    }
    #card {
      background : #99FF99;
      border-radius: 8px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 640px;
      margin: 0.5rem auto 0.3rem auto;
      width: 375px;
    }

    #card-content {
      padding: 1px 25px;
    }

    h3 {
      margin-top: 30px;
      font-family: times new roman;
      font-weight: bold;
      letter-spacing: 2px;
    }

  </style>
</head>
<body>
  <div id="card">
    <div id="card-content">
      <h3 class="text-center">Registrasi</h3>
      <hr>
      <form action="" method="POST">
        <div class="form-group">
          <label for="username">Username :</label>
          <input type="username" required class="form-control" id="username" placeholder="username" name="username">
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" required class="form-control" id="email" placeholder="email@example.com" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password :</label>
          <input type="password" required class="form-control" id="password" placeholder="password" name="password">
        </div>
        <div class="form-group">
          <label for="password2">Konfirmasi password :</label>
          <input type="password" required class="form-control" id="password2" placeholder="konfirmasi password" name="password2">
        </div>
        <div class="form-group">
          <label for="level">Level</label>
          <select id="level" name="level" class="form-control show tick" required>
            <option>user</option>
          </select>
        </div>
        <div align="center" class="form-group">
          <button type="submit" name = "submit" class="btn btn-primary text-center">Submit</button>
        </div>
        <p class="text-center" style="color: blue;">Sudah punya akun ? Silahkan <a style="font-style: italic;" href="login.php">Login</a></p>
      </form>
    </div>
  </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>