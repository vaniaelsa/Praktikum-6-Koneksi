<html>
    <head>
        <title> Select Data di Database </title>
    </head>
    <body>
        <?php
        //// deklarasi variabel servername,username,password,dan dbname
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDB";

        //membuat koneksi
        $conn = mysqli_connect($servername, $username, $password,  $dbname);
        //mengecek koneksi
        if (!$conn) {
            //kondisi bila koneksi gagal
            die("Conection failed: " . mysqli_connect_error());
        }

        //select data
        $sql = "SELECT kode, negara, champion FROM liga";
        // untuk mengetahui berapa jumlah baris di dalam tabel database yang dipanggil oleh perintah mysql_query()
        $result = mysqli_query($conn, $sql);

        // pengecekan kondisi pada  setiap baris yang ditampilkan
        if (mysqli_num_rows($result) > 0) {
            //output data  setiap baris
            while ($row = mysqli_fetch_assoc($result)) {
                echo "kode: " . $row["kode"]. "-Negara: " . $row["negara"]. " Champion " . $row["champion"]. "<br>";
            }
        }
        else {
            echo "0 results";
        }

        // untuk menghentikan koneksi php ke server mysql setelah instruksi atau query mysql selesai dilakukan
        mysqli_close($conn);
        ?>
    </body>
</html>