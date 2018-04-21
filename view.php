<!DOCTYPE HTML>
<html lang="ms"><!-- Bahasa Melayu-->
<head>
        <title>Maklumat Penuh Mangsa</title>
        <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<h1><center>Maklumat Penuh Mangsa<center></h1>
       
        <?php
				$info = $_GET['View'];
				
				$conn = mysql_connect("localhost","root","") or die ("Couldn't connect to the server.");
				$db = mysql_select_db("hilang",$conn) or die ("Couldn't connect to database.");
				$sql = "SELECT * FROM mangsa WHERE reportNo=$info";
				$result = mysql_query($sql) or die ("Could not execute query");
				$myrow = mysql_fetch_row($result);
				
				do{
				echo"
						<table align='center'>
							<tr>";
								echo'<img border="1" style="width:200px;height:200px;position:absolute;left:150px" src="data:image/jpeg;base64,'.base64_encode( $myrow[5]).'"/>';
								
							echo "
							</tr>
							<tr>
								<td class='th'><b>Kes :</b></td> <td class='data'><i>$myrow[1]</i></td>
							</tr>
							<tr>
								<td class='th'><b>Nama Penuh Mangsa :</b></td> <td class='data'><i>$myrow[6]</i></td>
							</tr>
							<tr>
								<td class='th'><b>Umur :</b></td> <td class='data'><i>$myrow[2]</i></td>
							</tr>
							<tr>
								<td class='th'><b>Kali Terakhir Dijumpai Di Alamat :</b></td> <td class='data'><i>$myrow[3]</i></td>
							</tr>
							<tr>
								<td class='th'><b>Tarikh Mangsa Hilang :</b></td> <td class='data'><i>$myrow[4]</i></td>
							</tr>
						</table><br>
						<table align='center'>
							<tr>
								<td class='th'><b>Nama Pengadu :</b></td> <td class='data'><i>$myrow[8]</i></td>
							</tr>
							<tr>
								<td class='th'><b>Hubungan Pengadu dengan Mangsa :</b></td> <td class='data'><i>$myrow[11]</i></td>
							</tr>
							<tr>
								<td class='th'><b>No. Telefon Pengadu :</b></td> <td class='data'><i>$myrow[9]</i></td>
							</tr>
							<tr>
								<td class='th'><b>Alamat E-mail Pengadu :</b></td> <td class='data'><i>$myrow[10]</i></td>
							</tr>
						</table>
						<br>
						";
				}
				while($myrow = mysql_fetch_row($result) );
				
		?>
        <p><b>
        	Jika anda terjumpa atau mempunyai sebarang maklumat berkait dengan mangsa, minta kerjasama anda untuk menghubungi dan memaklumkan kepada pengadu kehilangan mangsa dengan kadar segera. Bantuan anda amat diperlukan.
        </b></p>
        <center><div class="footer">Hakmilik Penuh &copy 2016 Muhammad Nur Zamir Bin Amiludin (DCS141013) - Final Year Project. Hak cipta terpelihara. </div></center>
</body>
</html>