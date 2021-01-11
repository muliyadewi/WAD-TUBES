<!doctype html>
<html lang="en">
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
  <title>Konsultasi</title>
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

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">AIho</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        <a class="nav-link"></a><a class="nav-link"></a><a class="nav-link"></a><a class="nav-link"></a><a class="nav-link"></a><a class="nav-link"></a>
        <a class="nav-link " aria-current="page" href="index.php">Home</a>
        <a class="nav-link " href="tescovid.php">Tes Covid-19</a>
        <a class="nav-link " href="Room_available.php">Room Available</a>

        <a class="nav-link active" href="rs.php">Konsultasi</a>
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
<div class="container-fluid">
  <div class="row mt-3">
  </div>

  <div class="container mt-5">
    <div class="card mb-4 p-4" style="max-width: 1000px; margin: auto;">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="https://web.rshs.or.id/public_html/wp-content/uploads/2015/02/gedung-bigger.jpg" class="card-img-top" alt="hasan_sadikin" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">RSUP Dr. Hasan Sadikin</h5>
              <p class="card-text">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161<p>
                </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                +62222034953<p>
                </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                Buka 24 jam<p>

              <a href="Form Konsultasi.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://rsupindad.com/wp-content/uploads/2019/08/DSC_0003-1024x631.jpg" class="card-img-top" alt="pindad" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">RSU PINDAD</h5>
              <p class="card-text">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                Jl. Gatot Subroto No.517, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40285<p>
                </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                +62227322877<p>
                </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                08.00 - 20.00 (Minggu Tutup)<p>

              <a href="Form Konsultasi.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/05/04/2271096851.jpg" class="card-img-top" alt="amc" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">RS AMC</h5>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
              Jl. Raya Cileunyi No.1, Cileunyi Wetan, Cileunyi, Bandung, Jawa Barat 40622<p>
              </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
              +62227781630<p>
              </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              Buka 24 jam<p>
 
              <a href="Form Konsultasi.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://lh3.googleusercontent.com/proxy/R2tQRWtIJeUhQoYZbefjld4A0RsGsmxfSTDRAUzMairbNbDHMIFWNg-D5t_Es_niLEtmolRekCLs4nbJ6RW9Md9tZLLWKIRbDN9EWSr90tZZFnn8Me2N2Z2z" class="card-img-top" alt="al_ihsan" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">RS Al Ihsan</h5>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
              Jl. Ki Astramanggala, Baleendah, Kec. Baleendah, Bandung, Jawa Barat 40381<p>
              </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
              +62225940872<p>
              </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              Buka 24 jam<p>

              <a href="Form Konsultasi.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://www.indonesiaexpose.co.id/wp-content/uploads/2019/04/IMG-20190427-WA0133.jpg" class="card-img-top" alt="bhayangkara" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">RS Bhayangkara</h5>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
              Jl. Moh. Toha No.369, Ciseureuh, Kec. Regol, Kota Bandung, Jawa Barat 40256<p>
              </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
              +628112232056<p>
              </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              Buka 24 jam<p>

              <a href="Form Konsultasi.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://lh3.googleusercontent.com/proxy/VC1kYQ0gfss6RQmTh1ZYLBMBj1cubr2klnjkVEgGAKl7XxQ8JxDnBThvvyzuygIXGULWSxlK_SNfHO1c1t0Hn_7XW2G0ZWy6bZujSVYbcicmjmSFHU-f10DY" class="card-img-top" alt="muhammadiyah" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">RS Muhammadiyah Bandung</h5>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
              Jl. K.H. Ahmad Dahlan No.53, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264<p>
              </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
              +62227301062<p>
              </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              Buka 24 jam<p>

              <a href="Form Konsultasi.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
      </body>
    </html>