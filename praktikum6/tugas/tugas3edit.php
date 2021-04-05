<?php
//menyisipkan file tugas3con.php
include('tugas3con.php');
 

// check kondisi
if(isset($_POST['update'])){	
	$id = $_POST['id_pegawai'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];

	// update data
	$result = mysqli_query($conn, $sql );
	
	// Redirect halaman
	header("Location: tugas3.php");
}
?>

<?php
//deklarasi id yang ada di tabel pegawai
$id = (isset($_GET['id']) ? $_GET['id'] : '');
 
// menampilkan data pegawai
$result = mysqli_query($conn, "SELECT * FROM pegawai WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$alamat = $user_data['alamat'];
	$email = $user_data['email'];
};
?>

<html>
<head>	
	<title>Edit Data Pegawai </title>
</head>
 
<body>
	<a href="tugas3.php">Halaman Utama </a>
	<br/><br/>
	
	<form name="update_user" method="post" action="tugas3edit.php">
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
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>