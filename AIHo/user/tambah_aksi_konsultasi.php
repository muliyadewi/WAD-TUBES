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
$test = mysqli_query($conn, "INSERT INTO `konsultasi`(`id_user`,`nama`, `alamat`, `no_telp`, `tanggal`, `usia`, `waktu`) VALUES 
('$namah','$nama','$alamat','$no_telp','$tanggal','$usia','$waktu')");


if ($test){
    header("location:myactivity2.php");
}else{
    echo 'gagal';
}


// mengalihkan halaman kembali ke index.php

