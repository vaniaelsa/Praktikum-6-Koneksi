<?php
//menyisipkan file tugas3con.php
include('tugas3con.php');
 
// deklarasi id yang ada
$id = (isset($_GET['id']) ? $_GET['id'] : '');
 
// query delete
$result = mysqli_query($mysqli, "DELETE FROM pegawai WHERE id=$id");
 
// redirect halaman
header("Location:tugas3.php");
?>