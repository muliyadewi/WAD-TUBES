

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
  <link rel="stylesheet" href= "datepicker/dist/css/bootstrap-datepicker.css">

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
            <a class="nav-link active  " href="tescovid.php" >Tes Covid-19</a>
            <a class="nav-link " href="Room_available.php" >Room Available</a>
            
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
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </div>
            
          </div>
        </div>
      </div>
  </nav>


  <div class="container">
        <h1 class="page-title text-center">Formulir Pendaftaran</h1>
        <div class="row d-flex flex-column align-items-center justify-content-center">
            <div class="col-8">
                <form method="POST" action="/products/input/storeProduct" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ProductName">Nama Lengkap</label>
                        <input name="name" type="text" class="form-control" id="ProductName" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="ProductName">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="alamatPasien" placeholder="Masukkan Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="ProductName">Usia</label>
                        <input name="usia" type="text" class="form-control" id="usiaPasien" placeholder="Masukkan Usia" required>
                    </div>
                    <div class="form-group">
                        <label for="ProductName">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">Pria</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">Wanita</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductName">Nomor Telp</label>
                        <input name="notelp" type="text" class="form-control" id="notelpPasien" placeholder="Masukkan No Telp" required>
                    </div>
                    <div class="form-group">
                        <label for="ProductPrice">Harga</label>
                        <input class="form-control" type="text" placeholder="Rp 300.000" readonly>
                    </div>
                    <div class="form-group">
                        <label >Tanggal</label>
                        <input type="text" id="datepicker" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">13:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">14:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">15:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                            <label class="form-check-label" for="inlineRadio4">16:00</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descriptionProduct">Gejala yang dialami (*kosongkan jika tidak ada)</label>
                        <textarea name="description" class="form-control" id="descriptionProduct" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <a href="myactivity.php" class="btn btn-primary">Submit</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="datepicker/dist/js/bootstrap-datepicker.js"> </script>

<script type="text/javascript">
        $(function(){
         $("#datepicker").datepicker({
             format: 'dd-mm-yyyy',
             autoclose: true,
             todayHighlight: true,
             daysOfWeekDisabled: [0,7],
             todayBtn: true
         });
        });
    </script>


    