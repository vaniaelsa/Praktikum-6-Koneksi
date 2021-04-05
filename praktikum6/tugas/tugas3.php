<?php
//menyisipkan file tugascon.php
include('tugas3con.php');
 
// Fetch all users data from database

$sql = "SELECT * FROM pegawai";
$result = mysqli_query($conn, $sql);
//$result = mysqli_query($mysqli, "SELECT * FROM pegawai ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Halaman Utama </title>
</head>
 
<body>
<a href="tugas3add.php">Tambahkan Data</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama</th> <th>Alamat</th> <th>Email</th> <th>Tindakan</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='tugas3edit.php?=$user_data[id_pegawai]'>Edit</a> | <a href='tugas3del.php?id=$user_data[id_pegawai]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>