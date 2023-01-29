<?php 
    date_default_timezone_set('Asia/Jakarta');

    //Database Localhost
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "otp_sender";

    $koneksi = mysqli_connect($servername, $username, $password, $database);

    if(!$koneksi)
    {
        die("Error, Please Try Again:" . mysqli_connect_error());
    }

   
?>