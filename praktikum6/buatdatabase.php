<?php
// deklarasi variabel servername,username,dan password
$servername = "localhost";
$username = "root";
$password = "";

//membuat koneksi 
$conn = mysqli_connect($servername, $username, $password);
//mengecek koneksi
if (!$conn) {
    //apabila tidak 
    die("Conection failed: " . mysqli_connect_error());
}
//membuat database
$sql = "CREATE DATABASE myDB";

//pengecekan kondisi bisa database bisa dibuat atau tidak 
if (mysqli_query($conn, $sql)) {
    //kondisi jika database bisa dibuat
        echo "Database created successfully";
}
else {
    //kondisi jika database gagal dibuat akan muncul error creating database
    echo "Error creating database: " . mysqli_error($conn);
}

// untuk menghentikan koneksi php ke server mysql setelah instruksi atau query mysql selesai dilakukan
mysqli_close($conn);
?>