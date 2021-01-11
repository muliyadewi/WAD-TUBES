<?php

require 'koneksi.php';

$id = $_GET['id'];
$reguler = $_POST['reguler'];
$vip = $_POST['vip'];

$query = mysqli_query($conn, "UPDATE `room` SET `kelas_vip`='$vip',`kelas_reguler`='$reguler' WHERE id = '$id'");

if ($query){
    header("Location: room_available.php");
}else{

}

?>

