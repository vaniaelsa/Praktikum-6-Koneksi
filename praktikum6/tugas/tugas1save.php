<?php
//menyisipkan file tugas1con.php
include('tugas1con.php');

//deklarasi variabel nama,email,dan isi 
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isipesan'];

// pengisian data pada tabel buku_tamu
$sql = "INSERT INTO buku_tamu(id_bt, nama, email, isi) 
VALUES (NULL,'$nama', '$email', '$isi' )";

//pengecekan kondisi saat mengisikan data pada tabel liga
if (mysqli_query($conn, $sql)) {
        echo "New Record Created Successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// untuk menghentikan koneksi php ke server mysql setelah instruksi atau query mysql selesai dilakukan
mysqli_close($conn);
?>