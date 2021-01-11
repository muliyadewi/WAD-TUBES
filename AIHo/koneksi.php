<?php

$conn = mysqli_connect("localhost", "root", "", "dbaiho");

session_start();



//register

function registrasi($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = ($data["email"]);
    $no_hp = ($data["nohp"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT nama FROM user WHERE nama = '$nama'");

    if (mysqli_fetch_assoc($result)) {

        return false;
    }

    if ($password !== $password2) {
        echo "<script> alert ('konfirmasi password tidak sesuai !'); </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES ('','$nama','$email','$no_hp','$password')");

    return mysqli_affected_rows($conn);
}


//memanggil email

function query($query)
{
    global $conn;
    $resultan = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($resultan)) {
        $rows[] = $row;
    }
    return $rows;
}

//manggilll email
