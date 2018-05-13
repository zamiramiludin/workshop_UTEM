<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<body>
<?php
$username = $_SESSION['username'];
        
$conn = mysqli_connect("localhost", "root", "", "hilang");
if (!$conn)
  {
  die("Connection error: " . mysqli_connect_error());
  }
$sql = "SELECT * FROM report WHERE reporter = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_all($result);
if (!$result)
{
    echo("Error description: " . mysqli_error($result));
}

if (mysqli_num_rows($result) == 0){
    echo "Nama Pengguna TIADA DALAM DATABASE <br><br> <a href='..\signInpage.php'>Kembali</a>";
    }
elseif($password != $row["password"]){
    echo "Nama Pengguna atau Kata Laluan SALAH  <br><br> <a href='..\signInpage.php'>Kembali</a>";
}



?>

</body>
</html>