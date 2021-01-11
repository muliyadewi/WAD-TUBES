<?php

require 'koneksi.php';
$rs = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM room where id = '$rs' ");

$test = mysqli_fetch_array($query);



?>
<DOCTYPE html>
    <html lang = "en">
    <head>
        <title>My Activity-Covid19</title>

        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <style>
            .navbar{
                background-color: #2f4858;
            }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">AIho</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>

                    <a class="nav-link " href="room_available.php" >Room Available</a>

                    <a class="nav-link " href="activityadmin.php" >MyActivity</a>
                    <a class="nav-link" href="#"></a>
                    <a class="nav-link" href="#"></a>
                    <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>            <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>

                    <div class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="page-title text-center">Formulir Update Ruangan</h1>
        <div class="row d-flex flex-column align-items-center justify-content-center">
            <div class="col-8">
                <form method="POST" action="updatefuncroom.php?id=<?php echo $test['id']?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ProductName">Nama Rumah Sakit</label>
                        <input name="name" type="text" class="form-control" id="ProductName" value="<?php echo $test['nama_rs'] ?>" placeholder="Masukkan Nama Rumah Sakit" readonly>
                    </div>
                    <div class="form-group">
                        <label for="ProductName">Jumlah Kamar VIP</label>
                        <input name="vip" type="text" class="form-control" id="vip" value="<?php echo $test['kelas_vip'] ?>" placeholder="Masukkan Jumlah Kamar VIP yang Tersedia" required>
                    </div>
                    <div class="form-group">
                        <label for="ProductName">Jumlah Kamar Reguler</label>
                        <input name="reguler" type="text" class="form-control" id="reguler" value="<?php echo $test['kelas_reguler'] ?>" placeholder="Masukkan Jumlah Kamar Reguler yang Tersedia" required>
                    </div>
                    <div class="form-group">
                        <label for="ProductName">Jumlah Kamar Reguler</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </body>
    </html>
