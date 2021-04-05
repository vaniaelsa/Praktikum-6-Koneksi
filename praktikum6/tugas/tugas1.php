<!DOCTYPE html>
<HTML>
<HEAD>
    <TITLE>Buku Tamu</TITLE>
    <LINK REL="STYLESHEET" TYPE="text/css" HREF="efek.css">
    <STYLE type="text/css">
        BODY {background-image: url("background.jpg"); 
              background-size: auto;
             }
        H1   {text-align: center;
              font-family: tahoma;
              color:black;
              background-color: lightcoral;
             }
    </STYLE>
</HEAD>
<BODY>
    <H1> BUKU TAMU </H1>
   <!-- method post untuk mengirimkan nilai yg diinput di form 
         ke halaman tugas1save.php -->
         <form method="POST" action="tugas1save.php">
            <table width="350" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130">Nama</td>
                    <!-- untuk menginput nama -->
                    <td><input type="text" name="nama"></td>
                </tr>
                
                <tr>
                    <td width="130">Email</td>
                    <!-- menginput email -->
                    <td><input type="text" name="email"></td>
                </tr>

                <tr>
                    <td width="130">Pesan-pesan</td>
                    <!-- untuk menginput teks pesan - pesan -->
                    <td><textarea name="isipesan" id="isi" cols="30" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td width="130"> 
                        <input type="submit" value="Simpan">  
                    </td>
                    <td>
                    <input type="reset" value="Bersihkan">
                    </td>
                </tr>
                
            </table>
        </form>   
    </BODY>
</HTML>