<!DOCTYPE html>
<html lang="ms">
<head>
    <title>Berjaya Dihantar</title>
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
            <li><a href="index.php"> LAMAN UTAMA</a></li>
            <li><a href="report.html">BUAT LAPORAN</a></li>
            <li><a href="about.html">TENTANG KAMI</a></li>
             <li><a href="tips.html">TIPS</a></li>
        </ul>
    </div>
    <div class="inside-content">
<?php

	$casename = $_POST['casename'];
	$fullname = $_POST['fullname'];
	$age = $_POST['age'];
	
	$imageData = addslashes($_FILES['image']['tmp_name']);
	$imageData = addslashes(file_get_contents($imageData));
	//$imageData = addslashes(base64_encode($imageData));
	
	$location = $_POST['location'];
	$date = $_POST['date'];
	
	$kinname = $_POST['kinname'];
	$teleno = $_POST['teleno'];
	$email = $_POST['email'];
	$relation = $_POST['relation'];
	
	$conn = mysql_connect("localhost", "root", "") or die ("Couldn't connect to server.");
	$db = mysql_select_db("hilang",$conn) or die ("Couldn't connect to database.");
	$sql = "INSERT INTO mangsa(caseName,age,address,dateLost,image,name,kinName,phoneNo,email,relation) VALUES('$casename','$age','$location','$date','$imageData','$fullname', '$kinname', '$teleno', '$email', '$relation')";
	$result = mysql_query($sql) or die ("Could not execute query");

	if($result) 
	{
		 echo "Laporan anda telah berjaya dihantar. Harap anda dapat menunggu untuk menerima maklum balas dari kami. Kami akan cuba menghubungi anda bagi tujuan pengesahan dalam masa terdekat.<br>
				Terima kasih kerana menggunakan perkhidmatan kami. Sebarang pertanyaan boleh emailkan kepada kami : <i>zamiramiludin@gmail.com</i><br><br>
		 "; 
	} 


?>
<a href="index.php"><button class="button">Balik ke Laman Utama</button></a>
 </div>
    <div class="footer">Hakmilik Penuh &copy 2016 Muhammad Nur Zamir Bin Amiludin (DCS141013) - Final Year Project. Hak cipta terpelihara. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="signIn.php">Admin</a></div>
</div>
</body>
</html>