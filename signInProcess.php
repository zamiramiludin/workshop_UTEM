<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if(($username == 'admin')&&($password == 'admin'))
{
	$_SESSION['status']='logged';
	$_SESSION['username']= $username;
	$_SESSION['password']= $password;
	header("Location: profile/admin.php");
}	
else
{

	$_SESSION['status']='logged';
	$_SESSION['username']= $username;
	$_SESSION['password']= $password;
	
	$conn = mysqli_connect("localhost", "root", "", "hilang");
	if (!$conn)
	{
	die("Connection error: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM user WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if (!$result)
	{
		echo("Error description: " . mysqli_error($result));
	}

	if (mysqli_num_rows($result) == 0){
		echo "Nama Pengguna TIADA DALAM DATABASE <br><br> <a href='signInpage.php'>Kembali</a>";
		}

	elseif($password != $row["password"]){
		echo "Nama Pengguna atau Kata Laluan SALAH  <br><br> <a href='signInpage.php'>Kembali</a>";
	}

	else{
		header("Location: profile/user.php");
	}
}

?>