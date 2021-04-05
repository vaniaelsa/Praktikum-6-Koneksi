<?php
// deklarasi variabel servername,username,password,dan dbname
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password,  $dbname);
//mengecek koneksi 
if (!$conn) {
    die("Conection failed: " . mysqli_connect_error());
}

// membuat tabel buku_tamu
$sql = "CREATE TABLE buku_tamu (
    id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi TEXT
    )";

//pengecekan kondisi saat membuat tabel
if (mysqli_query($conn, $sql)) {
    //kondisi jika tabel berhasil dibuat
    echo "New Table Created Successfully";
}
else {
    //kondisi jika tabel belum berhasil dibuat
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// untuk menghentikan koneksi php ke server mysql setelah instruksi atau query mysql selesai dilakukan
mysqli_close($conn);
?>