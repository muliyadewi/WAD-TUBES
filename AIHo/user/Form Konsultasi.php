

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
    .navbar{
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
            
            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
            <a class="nav-link " href="tescovid.php" >Tes Covid-19</a>
            <a class="nav-link " href="Room_available.php" >Room Available</a>
            
            <a class="nav-link active" href="rs.php" >Konsultasi</a>
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
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </div>
            
          </div>
        </div>
      </div>
  </nav>


<div class="container">
    <h1 class="page-title text-center">Formulir Konsultasi</h1>
    <div class="row d-flex flex-column align-items-center justify-content-center">
        <div class="col-8">
            <form method="POST" action="tambah_aksi_konsultasi.php">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" required>
                </div>
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input name="usia" type="text" class="form-control" id="usia" placeholder="Masukkan Usia" required>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="pria" value="Pria">
                        <label class="form-check-label" for="pria">Pria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="wanita" value="Wanita">
                        <label class="form-check-label" for="wanita">Wanita</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telp</label>
                    <input name="no_telp" type="text" class="form-control" id="no_telp" placeholder="Masukkan No Telp" required>
                </div>
                <div class="form-group">
                    <label for="ProductPrice">Harga</label>
                    <input class="form-control" type="text" placeholder="Rp 150.000" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                    <label>Jam</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="waktu" id="waktu" value="13:00">
                        <label class="form-check-label" for="waktu">13:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="waktu" id="waktu" value="14:00">
                        <label class="form-check-label" for="waktu">14:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="waktu" id="waktu" value="15:00">
                        <label class="form-check-label" for="waktu">15:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="waktu" id="waktu" value="16:00">
                        <label class="form-check-label" for="waktu">16:00</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descriptionProduct">Gejala yang dialami (*kosongkan jika tidak ada)</label>
                    <textarea name="description" class="form-control" id="descriptionProduct" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary" id="submit" name="submit">
                </div>

            </form>
        </div>
    </div>
</div>