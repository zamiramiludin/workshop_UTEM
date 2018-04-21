<?php
	session_start();#start session
 if($_SESSION['status']!='logged')
	 header("Location:error.php");
?>

<!DOCTYPE HTML>
<html lang="ms"><!-- Bahasa Melayu-->
<head>
        <title>Maklumat Mangsa</title>
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
                <li><a href="report.html">LAPORAN</a></li>
                <li><a href="about.html">TENTANG KAMI</a></li>
                <li><a href="tips.html">TIPS</a></li>
            </ul>
        </div>
        <div class="inside-content">
        <h1>Maklumat Mangsa</h1>
        <?php
				$info = $_POST['View'];
				
				$conn = mysql_connect("localhost","root","") or die ("Couldn't connect to the server.");
				$db = mysql_select_db("hilang",$conn) or die ("Couldn't connect to database.");
				$sql = "SELECT * FROM mangsa WHERE reportNo=$info";
				$result = mysql_query($sql) or die ("Could not execute query");
				$myrow = mysql_fetch_row($result);
				
				
				do{
				echo"
						<table width='70%' border='1' bordercolor='#CCCCCC'>
							<tr>
								<td><b>Nombor Laporan :</b></td> <td><i>$myrow[0]</i></td>
							</tr>
							<tr>
								<td><b>Kes :</b></td> <td><i>$myrow[1]</i></td>
							</tr>
							<tr>
								<td><b>Nama Penuh Mangsa :</b></td> <td><i>$myrow[6]</i></td>
							</tr>
							<tr>
								<td><b>Umur :</b></td> <td><i>$myrow[2]</i></td>
							</tr>
							<tr>
								<td><b>Kali Terakhir Dijumpai Di Alamat :</b></td> <td><i>$myrow[3]</i></td>
							</tr>
							<tr>
								<td><b>Tarikh Mangsa Hilang :</b></td> <td><i>$myrow[4]</i></td>
							</tr>
							<tr>
								<td><b>Gambar Mangsa :<b></td> <td>";
								
								echo'<img style="width:200px;height:200px;" src="data:image/jpeg;base64,'.base64_encode( $myrow[5]).'"/>';
								
								echo"</td>
							</tr>
							<tr>
								<td><b>Nama Pengadu :</b></td> <td><i>$myrow[8]</i></td>
							</tr>
							<tr>
								<td><b>Hubungan Pengadu dengan Mangsa :</b></td> <td><i>$myrow[11]</i></td>
							</tr>
							<tr>
								<td><b>No. Telefon Pengadu :</b></td> <td><i>$myrow[9]</i></td>
							</tr>
							<tr>
								<td><b>Alamat E-mail Pengadu :</b></td> <td><i>$myrow[10]</i></td>
							</tr>
						</table>
						<br>
        				<form method='POST' name='form1' action='approveProcess.php'>
							<input name='Approval' type='hidden' id='Approval' value='$myrow[0]'>
							<input type='submit' name='submit' value='Lulus'>
						</form>
						<br>
        				<form method='POST' name='form2' action='deleteProcess.php'>
							<input name='Delete' type='hidden' id='Delete' value='$myrow[0]'>
							<input type='submit' name='submit' value='Padam Rekod'>
						</form><br>
					";
				}
				while($myrow = mysql_fetch_row($result) );
				
		?>
        
        <a href="admin.php"><button class="button">Balik Ke Senarai Rekod</button></a> &nbsp;&nbsp; <a href="logout.php"><button class="button">Log Keluar</button></a><br><br>
        </div>
        <div class="footer">Hakmilik Penuh &copy 2016 Muhammad Nur Zamir Bin Amiludin (DCS141013) - Final Year Project. Hak cipta terpelihara. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="signIn.php">Admin</a></div>
    </div>
</body>
</html>