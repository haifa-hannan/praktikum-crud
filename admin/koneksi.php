<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "perpus";

    //buat koneksi
    $koneksi = mysqli_connect($serverName, $userName, $password, $database);

    //cek koneksi
    // if (!$koneksi) {
    //     die("Koneksi Gagal".mysqli_connect_error());
    // }
    // else{
    //     echo "koneksi berhasil";
    // }
    // mysqli_connect_error() -> untuk menampilkan deskripsi error
    // mysqli_connect_errno() -> untuk menampilkan kode/nomor error
?>