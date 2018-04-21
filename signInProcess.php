<?php
session_start();
$username = $_POST['username'];
$password = $_POST['userpassword'];

$_SESSION['status']='status';

if(($username == 'admin')&&($password == 'admin'))
{
	$_SESSION['status'] = 'logged';
	header("Location: admin.php");
}	
else
{
	header("Location: errorSignIn.php");
}

?>