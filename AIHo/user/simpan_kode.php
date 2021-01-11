<?php
// menangkap data dari form
$no_regis = $_POST['no_regis'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];

mysqli_query($koneksi, "INSERT INTO test VALUES ('$no_regis', '$nama', '$tanggal', '$waktu')") or die(mysqli_error($koneksi));

// mengalihkan halaman kembali ke index.php
header("location:index.php");
