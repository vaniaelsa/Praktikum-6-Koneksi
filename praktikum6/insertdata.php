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

// pengisian data pada tabel liga
$sql = "INSERT INTO liga (kode, negara, champion) 
VALUES 
('Jer', 'Jerman', '4'),
('Spa', 'Spanyol', '3'),
('Eng', 'English', '3')";

//pengecekan kondisi saat mengisikan data pada tabel liga
if (mysqli_query($conn, $sql)) {
    //kondisi saat baris berisi data yang diisikan ke tabel liga berhasil dibuat
    echo "New Record Created Successfully";
}
else {
    //kondisi saat baris berisi data yang diisikan ke tabel liga gagal, akan muncul error
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// untuk menghentikan koneksi php ke server mysql setelah instruksi atau query mysql selesai dilakukan
mysqli_close($conn);
?>