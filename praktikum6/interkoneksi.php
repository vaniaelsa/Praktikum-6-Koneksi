<html>
    <head>
        <title> Interkoneksi </title>
    </head>
    <body>
        <!-- header 1 -->
        <h1>Demo Koneksi database MySQL </h1>
        <?php
        //membuat koneksi database melalui localhost di phpmyadmin
        $conn = mysqli_connect("localhost","root","","myDB");

        // pengecekan kondisi berhasil terkoneksi atau tidak
        if (mysqli_connect_error()) {
            echo "Failed to connect to MYSQL ".mysqli_connect_error();
        }
        exit(); //keluar
        ?>
    </body>
</html>