<html>
<head>
	<title>Tambah Data Pegawai </title>
</head>
 
<body>
	<!-- kembali ke menu awal -->
	<a href="tugas3.php">Kembali Ke Menu Awal</a>
	<br/><br/>
 
	<form action="tugas3.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
    //menyisipkan file tugas3con.php
		include("tugas3con.php");


    if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
	
		//memasukkan data
		$result = mysqli_query($conn, "INSERT INTO pegawai(id_pegawai,nama,alamat,email) 
		VALUES(null,'$nama','$alamat','$email')");
		
		// pesan saat berhasil ditambahkan
		echo "Data berhasil ditambahkan. <a href='tugas3.php'>Lihat Data</a>";
	}

	?>
</body>
</html>