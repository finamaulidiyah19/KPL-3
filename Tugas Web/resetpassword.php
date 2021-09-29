<?php  
//   Nama  : Fina Maulidiyah N
//   NIM   : 19051397034
//   Prodi : D4 MI 19A

require 'functions.php';

if (isset($_POST["resetpassword"])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  if($password !== $password2) {
    echo "<script>
          alert('konfirmasi password tidak sesuai!');
          </script>";

  } elseif ($password == $password2) {
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_num_rows($result) == 0) {
        echo "<script>
              alert('username tidak terdaftar!');
              </script>";
    } else {
      echo "<script>
            alert('Reset password berhasil! Silahkan login.');
            document.location.href = 'login.php';
            </script>";

      $password = password_hash($password, PASSWORD_DEFAULT);

      $resetpassword = mysqli_query($conn, "UPDATE user SET password = '$password' WHERE username = '$username'");
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <title>Halaman Reset Password</title>

  <style type="text/css">
    body {
      background : #CCFFCC;
      background-repeat: no-repeat;
    }
    #card {
      background : #99FF99;
      border-radius: 8px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 470px;
      margin: 5rem auto 5rem auto;
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
      <h3 class="text-center">Reset Password</h3>
      <hr>
      <form action="" method="POST">
        <div class="form-group">
          <label for="username">Masukkan Username Anda :</label>
          <input type="username" required class="form-control" id="username" placeholder="username" name="username">
        </div>
        <div class="form-group">
          <label for="password">Masukkan Password Baru :</label>
          <input type="password" required class="form-control" id="password" placeholder="password baru" name="password">
        </div>
        <div class="form-group">
          <label for="password2">Konfirmasi Password Baru :</label>
          <input type="password" required class="form-control" id="password2" placeholder="konfirmasi password baru" name="password2">
        </div>
        <div align="center" class="form-group">
          <button type="submit" name = "resetpassword" class="btn btn-primary">Reset</button>
        </div>
        <p class="text-center" style="color: blue;">Kembali ke halaman <a style="font-style: italic;" href="login.php">Login</a>.</p>
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