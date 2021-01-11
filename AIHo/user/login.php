<!Doctype html>
<html>

<?php


if (isset($_COOKIE['login'])) {
  if ($_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

require 'koneksi.php';

if (isset($_POST["login"])) {

  $nama = $_POST["nama"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$nama'");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {

      $_SESSION["login"] = true;

      $_SESSION["nama"] = $_POST["nama"];

      //cookie
      if (isset($_POST['remember'])) {

        setcookie('login', 'true', time() + 43200);
      }

      header("Location: index.php");
      exit;
    }
  }

  $error = true;
}

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Login</title>

  <style>
    #box {

      width: 400px;
      height: 500px;
      left: 450px;

      background: #FFFFFF;

      box-sizing: border-box;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #warna {
      background-color: #b2bcc2;

    }

    #btn {
      padding-left: 40px;
    }
  </style>
</head>

<body id="warna">
  <nav class="navbar navbar-light " style="background-color:#2f4858;">
    <a class="navbar-brand" href="../index.php" style="color: white;">Back</a>

    <form class="form-inline">

      <a class="nav-link active text-light" href="../index.php">AIHO</a>

    </form>
  </nav>


  <?php if (isset($error)) : ?>

    <script>
      alert('Login Gagal!');
    </script>


  <?php endif; ?>

  <br><br><br>
  <br>
  <div class="d-flex align-items-center justify-content-center">
    <div id="warna">
      <div id="box">
        <br><br>
        <h3 style="text-align: center;">Login</h3>
        <hr />
        <div class="card-body">

          <form action="" method="post">
            <div class="form-group col-10" style="left: 30px;">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Anda" name="nama">

              <div class="form-group  col-15 ">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>

              </div>
              <p>Belum punya akun? <a href="Register.php"> Registrasi </a></p>
              <button type='submit' class='btn btn-block btn-primary' name="login">Login</button>
                <a href="../admin/login.php" type='submit' class='btn btn-block btn-warning' name="login">Login Admin</a>
              <br>
          </form>
          <br>

          <br><br>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>