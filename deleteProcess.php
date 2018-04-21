<?php
session_start();
 if($_SESSION['status']!='logged')
	 header("Location:error.php");
?>
<!DOCTYPE HTML>
<html lang="ms"><!-- Bahasa Melayu-->
<head>
        <title>Victim Information</title>
        <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <div class="content">
        <div class="header" align="center">
            <img src="images/websitelogo.png" alt="Logo Hilang"><br/>
            <header style="font-family: Verdana, Geneva, Tahoma, sans-serif;text-shadow: 1px 1px antiquewhite">
                Aduan Kehilangan Insan Yang Tersayang
            </header><br/>
            <ul>
                <li><a href="index.html"> LAMAN UTAMA</a></li>
                <li><a href="report.html">BUAT LAPORAN</a></li>
                <li><a href="about.html">TENTANG KAMI</a></li>
                 <li><a href="tips.html">TIPS</a></li>
            </ul>
        </div>
        <div class="inside-content">
        <?php
            $del = $_POST['Delete'];
        
            $conn = mysql_connect("localhost", "root", "") or die ("Couldn't connect to server.");
            $db = mysql_select_db("hilang",$conn) or die ("Couldn't connect to database.");
            $sql = "DELETE FROM mangsa WHERE reportNo='$del'";
            $result = mysql_query($sql) or die ("Could not execute query");
            if($result) 
            {
                 echo "<br>Rekod telah berjaya dipadam.<br><br>";
            }
        ?>
<a href="admin.php"><button class="button">Balik Ke Senarai Rekod</button></a> &nbsp;&nbsp; <a href="logout.php"><button class="button">Log Keluar</button></a><br><br>
        </div>
        <div class="footer">Hakmilik Penuh &copy 2016 Muhammad Nur Zamir Bin Amiludin (DCS141013) - Final Year Project. Hak cipta terpelihara. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="signIn.php">Admin</a></div>
    </div>
</body>
</html>