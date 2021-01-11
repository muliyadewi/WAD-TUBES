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
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
          <a class="nav-link active  " href="tescovid.php">Tes Covid-19</a>
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

  <div class="container mt-5">
    <div class="card mb-4 p-4" style="max-width: 1000px; margin: auto;">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="https://web.rshs.or.id/public_html/wp-content/uploads/2015/02/gedung-bigger.jpg" class="card-img-top" alt="hasan_sadikin" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">Laboratorium Klinik Kimia Farma Dago Unpad</h5>
              <p class="card-text">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                Jl. Ir. H. Juanda No.248, Sekeloa, Kecamatan Coblong, Kota Bandung, Jawa Barat 40134<p>
                </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                (022) 20454198<p>
                </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                06.15 - 21.00 (Minggu Tutup)<p>
                </p><img src="https://nowskills.co.uk/wp-content/uploads/2018/07/money-PNG-e1532606569895.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                Rp 150.000<p>
                </p>Hasil Test :
                4 Hari Kerja</p>
              <a href="form_tes_covid150.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://rsupindad.com/wp-content/uploads/2019/08/DSC_0003-1024x631.jpg" class="card-img-top" alt="pindad" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">Lab Klinik Kimia Farma Diponegoro Bandung</h5>
              <p class="card-text">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                Jl. Diponegoro No.40, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115<p>
                </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                (022) 20542249<p>
                </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                06.15 - 21.00 (Minggu Tutup)<p>
                </p><img src="https://nowskills.co.uk/wp-content/uploads/2018/07/money-PNG-e1532606569895.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                Rp 150.000<p>
                </p>Hasil Test :
                4 Hari Kerja</p>
              <a href="form_tes_covid150.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/05/04/2271096851.jpg" class="card-img-top" alt="amc" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">Laboratorium Klinik Pramita Martadinata</h5>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
              Jl. LLRE Martadinata St No.135, Cihapit, Bandung Wetan, Kota Bandung, Jawa Barat 40114<p>
              </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
              (022) 7271946<p>
              </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              06.15 - 21.00 (Minggu Tutup)<p>
              </p><img src="https://nowskills.co.uk/wp-content/uploads/2018/07/money-PNG-e1532606569895.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              Rp 300.000<p>
              </p>Hasil Test :
              1 Hari Kerja</p>
              <a href="form_tes_covid300.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://d1ojs48v3n42tp.cloudfront.net/personnels/617681_30-9-2020_17-37-2.png" class="card-img-top" alt="al_ihsan" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">Laboratorium Klinik Kimia Farma Cihampelas</h5>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
              Jl. Cihampelas No.9, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171<p>
              </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
              (022) 4266580<p>
              </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              06.15 - 21.00 (Minggu Tutup)<p>
              </p><img src="https://nowskills.co.uk/wp-content/uploads/2018/07/money-PNG-e1532606569895.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              Rp 150.000<p>
              </p>Hasil Test :
              3 Hari Kerja</p>
              <a href="form_tes_covid150.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://www.indonesiaexpose.co.id/wp-content/uploads/2019/04/IMG-20190427-WA0133.jpg" class="card-img-top" alt="bhayangkara" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">RS Hermina Pasteur</h5>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
              Jl. Dr. Djunjunan No.107, Pasteur, Kec. Cicendo, Kota Bandung, Jawa Barat 40173<p>
              </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
              (022) 6072525<p>
              </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              06.15 - 21.00 (Minggu Tutup)<p>
              </p><img src="https://nowskills.co.uk/wp-content/uploads/2018/07/money-PNG-e1532606569895.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              Rp 150.000<p>
              </p>Hasil Test :
              5 Hari Kerja</p>
              <a href="form_tes_covid150.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://rsupindad.com/wp-content/uploads/2019/08/DSC_0003-1024x631.jpg" class="card-img-top" alt="muhammadiyah" style="width: 299px; height: 250px;">
            <div class="card-body">
              <h5 class="card-title">RS Pindad Bandung</h5>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
              Jl. Gatot Subroto No.517, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40285<p>
              </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
              (022) 7322877<p>
              </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              08.00 - 20.00 (Minggu Tutup)<p>
              </p><img src="https://nowskills.co.uk/wp-content/uploads/2018/07/money-PNG-e1532606569895.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
              Rp 300.000<p>
              </p>Hasil Test :
              1 Hari Kerja</p>
              <a href="form_tes_covid300.php" class="btn btn-primary">Buat Janji</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>