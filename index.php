<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>
    <link rel="icon" type="image/x-icon" href="../css/img/logo-1.png.png">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <nav class="header">
      <h1>Data Peminjaman Perpustakaan</h1>
    </nav>

    <!-- form -->
    <section id="form" class="form">
        <h2>Input data</h2>
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
				<td><input type="submit" value="Simpan" id="btn"></td>					
			</tr>				
		</table>
	    </form>
    </section>
    <!-- form -->

    <!-- data section -->
    <section id="data" class="data"> 
      <h2>Tabel Data</h2>
      <?php
        include "connect.php";
        $query = "SELECT * FROM tb_peminjaman";
        $sql = mysqli_query($connect, $query);
        $row = mysqli_num_rows($sql);
        if($row > 0){
          echo "<table border='1' cellpadding='10' cellspacing='0'>";
          echo "<tr>
                  <th>Nama</th>
                  <th>Judul Buku</th>
                  <th>No. Telp</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Tindakan</th>
                </tr>";
          while($data = mysqli_fetch_array($sql)){
            echo "<tr>";
            echo "<td>" . $data['nama_peminjam'] . "</td>";
            echo "<td>" . $data['judul_buku'] . "</td>";
            echo "<td>" . $data['no_telp'] . "</td>";
            echo "<td>" . $data['tgl'] . "</td>";
            echo "<td>";
            echo "<a href='update.php?id_peminjaman=" . $data['id_peminjaman'] . "'>Update</a>";
            echo "<a href='delete.php?id_peminjaman=" . $data['id_peminjaman'] . "'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else{
          echo "<p>Belum ada data peminjaman</p>";
        } 
      ?>
    </section>
     <!-- data section -->

    <!-- icons -->
    <script>
      feather.replace();
    </script>
  
    <!-- javascript -->
    <script src="../js/script.js"></script>

  </body>
</html>
