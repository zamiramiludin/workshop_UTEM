
<?php
		
	$imageData = addslashes($_FILES['victimPicture']['tmp_name']);
	$imageData = addslashes(file_get_contevictimPicturents($imageData)); 
	//$imageData = addslashes(base64_encode($imageData));
	
	//$target = "uploads/" . basename($_FILES["victimPicture"]["name"]);
	//$picture = $_FILES["victimPicture"]["name"];

	$caseType = $_POST['caseType'];
	$fullname = $_POST['victimName'];
	$age = $_POST['victimAge'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$date = $_POST['date'];
	$attire = $_POST['attire'];
	$characteristic = $_POST['characteristic'];
	$relation = $_POST['relation'];
	$info = $_POST['info'];
	
	$conn = mysql_connect("localhost", "root", "") or die ("Couldn't connect to server.");
	$db = mysql_select_db("hilang",$conn) or die ("Couldn't connect to database.");
	$sql = "INSERT INTO report ( caseType, name, age, gender, address, city, state, date, attire, characteristic, picture, relation, info) VALUES('$caseType','$fullname','$age','$gender','$address','$city','$state','$date','$attire','$characteristic', '$imageData', '$relation', '$info')";
	$result = mysql_query($sql) or die ("Could not execute query");

	if($result) 
	{
		 echo "Laporan anda telah berjaya dihantar. Harap anda dapat menunggu untuk menerima maklum balas dari kami. Kami akan cuba menghubungi anda bagi tujuan pengesahan dalam masa terdekat.<br>
				Terima kasih kerana menggunakan perkhidmatan kami. Sebarang pertanyaan boleh emailkan kepada kami : <i>zamiramiludin@gmail.com</i><br><br>
		 "; 
	} 

?>
