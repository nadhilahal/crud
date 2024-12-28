<?php
include "connect.php"; // Pastikan koneksi terhubung

if( !isset($_GET['id_peminjaman']) ){
    header('location: index.php');
}

//ambil id dari query string
$id = $_GET['id_peminjaman'];
$sql = "SELECT * FROM tb_peminjaman WHERE id_peminjaman=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit</title>
    </head>
    <body>
        <section class="header">
            <h1>Data Peminjaman Perpustakaan</h1>
        </section>
        <section>
            <h2>Edit data</h2>
            <form action="upload.php" method="post">		
		    <table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_peminjam"></td>					
			</tr>	
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judul_buku"></td>					
			</tr>	
			<tr>
				<td>No. Telp</td>
				<td><input type="text" name="no_telp"></td>					
			</tr>	
			<tr>
				<td>Tgl Peminjaman</td>
				<td><input type="date" name="tgl"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		    </table>
	        </form>
        </section>
    </body>
</html>