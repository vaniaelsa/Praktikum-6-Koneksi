<?php
//deklarasi variabel
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password,  $dbname);

if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}
?>