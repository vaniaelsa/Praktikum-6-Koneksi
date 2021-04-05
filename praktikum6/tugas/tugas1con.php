<html>
    <head>
        <title> Koneksi Database </title>
    </head>
    <body>
        <?php
        //membuat koneksi database melalui localhost di phpmyadmin
        $conn = mysqli_connect("localhost","root","","myDB");

        // pengecekan kondisi berhasil terkoneksi atau tidak
        if (mysqli_connect_error()) {
            //kondisi bila error
            echo "Failed to connect to MYSQL ".mysqli_connect_error();
        }
        else {
            //kondisi berhasil terkoneksi
            echo "Berhasil connect <br><br>";
        }
        ?>
    </body>
</html>