<!doctype html>
<html>

<?php

require 'koneksi.php';

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>AIHo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Home</title>

  <style>
    .navbar {
      background-color: #2f4858;
    }
  </style>



</head>

<body id="warna">

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">AIho</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

          <a class="nav-link"></a><a class="nav-link"></a><a class="nav-link"></a><a class="nav-link"></a><a class="nav-link"></a><a class="nav-link"></a>
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link " href="tescovid.php">Tes Covid-19</a>
          <a class="nav-link " href="Room_available.php">Room Available</a>

          <a class="nav-link " href="rs.php">Konsultasi</a>

          <div class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION["nama"]; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="myactivity.php">MyActivity</a>

              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </nav>
  <br><br><br><br>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <div class="container">
    <div class="card-group">
      <div class="card bg-light">
        <div class="card-body ">
          <form action="" method="post">


            <img class="card-img-top" src="https://rsbhayangkaranganjuk.com/wp-content/uploads/2020/01/KELAS-VIP.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
            <br>
              <h4 class="card-title">Room Tersedia</h4>
              <p class="card-text " name="low" value="low">Cek Kamar Tersedia di Rumah Sakit dengan jenis kamar VIP dan Reguler</p>
              <a href="Room_available.php">Cek Sekarang</a>



            </div>
          </form>
        </div>
      </div>
      <div class="card bg-light">
        <div class="card-body ">
          <form action="" method="post">

            <img class="card-img-top" src="https://image-cdn.medkomtek.com/X9w-YP1SvePSQaOQf6Kfsn2WS6M=/1200x675/smart/klikdokter-media-buckets/medias/1740857/original/029652700_1508145627-Lakukan-5-Hal-Ini-saat-Konsultasi-ke-Dokter.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <br>
              <h4 class="card-title">Konsultasi</h4>
              <p name="mi" value="mi" class="card-text">Konsultasi berbagai keluhan kesehatan di Rumah Sakit pilihan kami</p>
              <a href="rs.php">Cek Sekarang</a>

            </div>
          </form>
        </div>
      </div>
      <div class="card bg-light">
        <div class="card-body ">
          <form action="" method="post">

            <img class="card-img-top" src="https://ik.imagekit.io/tvlk/blog/2020/09/Tes-COVID-19-Malang-1.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <br>
              <h4 class="card-title">Tes Covid-19</h4>
              <p name="mid" value="mid" class="card-text">Cek kegiatan dan pantau aktivitas anda dalam menggunakan fitur kami</p>

              <a href="tescovid.php">Cek Sekarang</a>

            </div>
          </form>
        </div>
      </div>

    </div>
  </div>



</body>

</html>