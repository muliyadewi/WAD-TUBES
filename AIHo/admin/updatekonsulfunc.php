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
$file = $_POST['file'];
$status = $_POST['status'];
$id = $_GET['id'];


// menginput data ke database
$test = mysqli_query($conn, "UPDATE `konsultasi` SET `nama`='$nama',`alamat`='$alamat',`usia`='$usia',
`no_telp`='$no_telp',`tanggal`='$tanggal',`waktu`='$waktu',`status`='$status',`file`='$file' WHERE id = '$id'" );
if ($test){
    header("location:activityadmin.php");
}

