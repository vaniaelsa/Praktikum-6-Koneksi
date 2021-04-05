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

// membuat tabel liga
$sql = "CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion int(3)
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