<?php
    $host = "localhost"; // Nama hostnya
    $user = "root"; // Username
    $pass = ""; // Password 
    $db = "data_perpus"; // Database
    $connect = mysqli_connect($host, $user, $pass, $db); // Koneksi ke MySQL

    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?> 