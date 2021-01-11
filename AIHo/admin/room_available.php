<?php

require 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM room ");



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
            <a class="navbar-brand" href="index.php">AIHo</a>
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

                </div>
            </div>
        </div>
    </nav>
    <div class = container style = "padding-top:50px">
        <div class="card-body">
            <table style= "text-align: center" class="table table-striped">
                <thead>
                <tr>
                    <th>No Registrasi</th>
                    <th>Rumah Sakit</th>
                    <th>Jumlah VIP</th>
                    <th>Jumlah Reguler</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                while($datacart = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $datacart['id'] ?></th>
                        <th scope="row"><?php echo $datacart['nama_rs'] ?></th>
                        <td><?php echo $datacart['kelas_vip'] ?></td>
                        <td><?php echo $datacart['kelas_reguler'] ?></td>
                        <td><a href="updateroom.php?id=<?php echo $datacart['id'] ?>" class="btn btn-danger">Update</a>
                        </td>
                    </tr>

                    <?php
                }
                ?>

                </th>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </body>
    </html>
