<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'classicmodels';
    $conn = mysqli_connect($host, $user, $pass);

    if (! $conn){
        die('Koneksi Gagal: '. mysqli_error($conn));
    }

    mysqli_select_db($conn, $dbname);

    return $conn;
?>