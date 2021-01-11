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
    <title>AIho</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Home</title>
  
  <style>
    .navbar{
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
            
            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
            <a class="nav-link " href="tescovid.php" >Tes Covid-19</a>
            <a class="nav-link active " href="Room_available.php" >Room Available</a>
            
            <a class="nav-link " href="rs.php" >Konsultasi</a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>
            
            <div class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION["nama"]; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="myactivity.php">MyActivity</a>
          <a class="dropdown-item" href="profil.php">Profil</a>
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
                  <h5 class="card-title">RSUP Dr. Hasan Sadikin</h5>
                  <p class="card-text">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                  Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161<p>
                  </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                  +62222034953<p>
                  </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                  Buka 24 jam<p>
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                  Rumah Sakit Tipe A</p>
                  <a href="hasan_sadikin.php" class="btn btn-primary">Lihat ruangan</a>
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
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                  Rumah Sakit Tipe C</p>
                  <a href="pindad.php" class="btn btn-primary">Lihat ruangan</a>
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
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                  -</p>
                  <a href="amc.php" class="btn btn-primary">Lihat ruangan</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://lh3.googleusercontent.com/proxy/uHzXfBKus-u87Nl7iiqwuNyX-0X33xc7GBTaEvv9pHbZdpJG99ndikYgRRvukJYf_FewIoCK6Whb5a6OugqROND2wNUAKFcaqwSh_v3yOZ7T20Y2kG8DQysS" class="card-img-top" alt="al_ihsan" style="width: 299px; height: 250px;">
                <div class="card-body">
                  <h5 class="card-title">RS Al Ihsan</h5>
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                  Jl. Ki Astramanggala, Baleendah, Kec. Baleendah, Bandung, Jawa Barat 40381<p>
                  </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                  +62225940872<p>
                  </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                  Buka 24 jam<p>
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                  Rumah Sakit Tipe B</p>
                  <a href="al_ihsan.php" class="btn btn-primary">Lihat ruangan</a>
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
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                 -</p>
                  <a href="bhayangkara.php" class="btn btn-primary">Lihat ruangan</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://lh3.googleusercontent.com/proxy/vW1HAmn3tTCIH3ZBg-2QonZSxRk3kLhjtNQgCbJ0tKApzm0L97ebvOxm5C-i5L227ylVdqavVGvZs8ZJabSPO1UJQLPUig0qwkSMvQYGqcRKY6s56KIvvmjp" class="card-img-top" alt="muhammadiyah"
                style="width: 299px; height: 250px;">
                <div class="card-body">
                  <h5 class="card-title">RS Muhammadiyah Bandung</h5>
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                  Jl. K.H. Ahmad Dahlan No.53, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264<p>
                  </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                  +62227301062<p>
                  </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                  Buka 24 jam<p>
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                 -</p>
                  <a href="muhammadiyah.php" class="btn btn-primary">Lihat ruangan</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://d1ojs48v3n42tp.cloudfront.net/provider_location_banner/512703_8-5-2020_12-12-16.jpeg" class="card-img-top" alt="advent" style="width: 299px; height: 250px;">
                <div class="card-body">
                  <h5 class="card-title">RS Advent Bandung</h5>
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                  Jl. Cihampelas No.161, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131<p>
                  </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                  +622220343869<p>
                  </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                  Buka 24 jam<p>
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                 -</p>
                  <a href="advent.php" class="btn btn-primary">Lihat ruangan</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://rsborromeus.com/wp-content/uploads/2017/02/11.jpg" class="card-img-top" alt="borromeus" style="width: 299px; height: 250px;">
                <div class="card-body">
                  <h5 class="card-title">RS Borromeus Bandung</h5>
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                  Jl. Ir. H. Juanda No.100, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132<p>
                  </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                  +62222552000<p>
                  </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                  Buka 24 jam<p>
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                 -</p>
                  <a href="borromeus.php" class="btn btn-primary">Lihat ruangan</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://1.bp.blogspot.com/-978U6PZbo6w/XfXt3viYWcI/AAAAAAAALoM/6lbfLQglA4E5UzLNUZz8Vg5KEaQjzrftgCLcBGAsYHQ/s1600/rs-al-islam-bandung-jawa-barat.jpg" class="card-img-top" alt="rsai"
                style="width: 299px; height: 250px;">
                <div class="card-body">
                  <h5 class="card-title">RSAI Bandung</h5>
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS5U8Yi4AzNeKZG0Db-_QLmoNIzU6J6TSXDg&usqp=CAU" class="card-img-top" alt="" style="width: 33px; height: 30px;">
                  Jl. Soekarno-Hatta No.644, Manjahlega, Kec. Rancasari, Kota Bandung, Jawa Barat 40286<p>
                  </p><img src="https://i.pinimg.com/736x/77/b2/37/77b237e0f2aa971ec67f4e31a9f09b79.jpg" class="card-img-top" alt="" style="width: 20px; height: 20px;">
                  +62227562046<p>
                  </p><img src="https://img.icons8.com/cotton/2x/clock--v2.png" class="card-img-top" alt="" style="width: 22px; height: 22px;">
                  Buka 24 jam<p>
                  </p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYmfUV8G9CctdZ5dg7a5zAHijR94L4Sx7pyQ&usqp=CAU" class="card-img-top" alt="" style="width: 21px; height: 21px;">
                 -</p>
                  <a href="rsai.php" class="btn btn-primary">Lihat ruangan</a>
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



















