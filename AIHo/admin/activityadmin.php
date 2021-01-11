<html lang="en">
<?php

require 'koneksi.php';


$query = mysqli_query($conn,"SELECT * FROM testcovid");






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

                <a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a><a class="nav-link" ></a>
                <a class="nav-link " href="adminpage.php" >Home</a>
                <a class="nav-link " href="room_available.php" >Room Available</a>

                <a class="nav-link " href="activityadmin.php" >MyActivity</a>
                
                <a class="nav-link " href="logout.php" >Logout</a>
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
<br><br><br><br>


<div class=container style="padding-top:50px">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Covid-19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="activityadmin2.php">Konsultasi</a>
                </li>
            </ul>
        </div>

        <?php

        //        // mengambil data barang dengan kode paling besar
        //        $query = mysqli_query($conn, "SELECT max(no_regis) as kodeTerbesar FROM testcovid");
        //        $data = mysqli_fetch_array($query);
        //        $noregis = $data['kodeTerbesar'];
        //
        //        // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
        //        // dan diubah ke integer dengan (int)
        //        $urutan = (int) substr($noregis, 3, 3);
        //
        //        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
        //        $urutan++;
        //
        //        // membentuk kode barang baru
        //        // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
        //        // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
        //        // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya TC
        //        $huruf = "TC";
        //        $noregis = $huruf . sprintf("%03s", $urutan);
        //        ?>
        <div class="card-body">
            <table style="text-align: center" class="table table-striped">
                <thead>
                <tr>
                    <th>No Registrasi</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Tes</th>
                    <th>Jam Tes</th>
                    <th>Status</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                while($datacart = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $datacart['id'] ?></th>
                        <td><?php echo $datacart['nama'] ?></td>
                        <td><?php echo $datacart['tanggal'] ?></td>
                        <td><?php echo $datacart['waktu'] ?></td>
                        <td><?php echo $datacart['status'] ?></td>
                        <td><?php echo $datacart['file'] ?></td>
                        <td><a href="updatecovid.php?id=<?php echo $datacart['id']?>" class="btn btn-success">Update</a></td>

                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

</html>