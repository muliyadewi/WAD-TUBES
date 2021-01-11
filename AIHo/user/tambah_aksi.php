<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$no_telp = $_POST['no_telp'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$namah = $_SESSION['nama'];

// menginput data ke database
$test = mysqli_query($conn, "INSERT INTO `testcovid`(`nama`, `alamat`, `usia`, `no_telp`, `tanggal`, `waktu`,`id_user`) 
VALUES ('$nama','$alamat','$usia','$no_telp','$tanggal','$waktu','$namah')");


// mengalihkan halaman kembali ke index.php
header("location:myactivity.php");
