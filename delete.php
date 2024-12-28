<?php
// Mengambil file koneksi
include 'connect.php';

$id = $_GET['id_peminjaman'];
$result = mysqli_query($connect, "DELETE FROM tb_peminjaman WHERE id_peminjaman=$id");
//  Kembali kehalaman materi.php
header("location:index.php");
?>