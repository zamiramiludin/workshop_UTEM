
<?php
		
	$imageData = addslashes($_FILES['victimPicture']['tmp_name']);
	$imageData = addslashes(file_get_contents($imageData)); 
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
	
	$conn = new mysqli("localhost", "root", "", "hilang");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO report ( caseType, name, age, gender, address, city, state, date, attire, characteristic, picture, relation, info) 
	VALUES('$caseType','$fullname','$age','$gender','$address','$city','$state','$date','$attire','$characteristic', '$imageData', '$relation', '$info')";


	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
