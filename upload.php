<?php
include "connect.php"; // Pastikan koneksi terhubung

// Ambil data dari form
$peminjam = $_POST['nama_peminjam'];
$buku = $_POST['judul_buku'];
$no_telp = $_POST['no_telp'];
$tgl = $_POST['tgl'];

// Proses simpan ke Database
$query = "INSERT INTO tb_peminjaman (nama_peminjam, judul_buku, no_telp, tgl) 
          VALUES ('$peminjam', '$buku', '$no_telp', '$tgl')";
$sql = mysqli_query($connect, $query);

// Cek jika proses simpan ke database sukses atau tidak
if($sql){
  // Jika Sukses,
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal,
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
?>