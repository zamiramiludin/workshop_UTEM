<?php
//session_start();
 //if($_SESSION['status']!='logged')
	// header("Location:error.php");
?>
<!DOCTYPE HTML>
<html lang="ms"><!-- Bahasa Melayu-->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <title>Admin</title>
</head>

<!-- <body>
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
            <h1>Admin</h1> 
            <?php /*
				$conn = mysql_connect("localhost","root","") or die ("Couldn't connect to the server.");
				$db = mysql_select_db("hilang",$conn) or die ("Couldn't connect to database.");
				$sql = "SELECT * FROM mangsa";
				$result = mysql_query($sql) or die ("Could not execute query");
				$myrow = mysql_fetch_row($result);
				
				echo "<center>
				<table width='100%' border='1' cellspacing='0' bordercolor='#CCCCCC'>
				<tr bgcolor='lightgrey'>
					<th width='5%'><center><strong>No. Laporan</strong></center></th>
					<th width='10%'><center><strong>Kes</strong></center></th>
					<th width='15%'><center><strong>Nama</strong></center></th>
					<th width='3%'><center><strong>Umur</strong></center></th>
					<th width='15%'><center><strong>Alamat</strong></center></th>
					<th width='12%'><center><strong>Tarikh Kejadian</strong></center></th>
					<th width='5%'><center><strong>Kelulusan</strong></center></th>
					<th width='5%'><center><strong>Lihat</strong></center></th>
				</tr>";
				do{
				echo"
					<tr>
						<td>$myrow[0]</td>
						<td>$myrow[1]</td>
						<td>$myrow[6]</td>
						<td>$myrow[2]</td>
						<td>$myrow[3]</td>
						<td>$myrow[4]</td>
						<td>$myrow[7]</td>
						<td>
						<form name='form1' method='post' action='viewDetail.php'>		
							<input name='View' type='hidden' id='View' value='$myrow[0]'>
							<input type='submit' name='submit' value='Lihat'>
						</form>
						</td>
					</tr>";
				}
				while($myrow = mysql_fetch_row($result) ); 
				echo"</table></center>"; */

			?>
           <br>
			<a href="logout.php"><button class="button">Log Keluar</button></a><br><br>
        </div>
        <div class="footer">Hakmilik Penuh &copy 2016 Muhammad Nur Zamir Bin Amiludin (DCS141013) - Final Year Project. Hak cipta terpelihara. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="signIn.php">Admin</a></div>
    </div>
</body> -->
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
		<div class="navbar-brand col-sm-3 col-md-2 mr-0">
			  <img src="../images/websitelogo.png" width="120" height="50" alt="Logo Hilang">
    </div>
    <span class="text-white">[username]</span>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Log keluar</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-th-list"></i>
                Laporan
                </a>
              </li>            
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-inbox"></i>
                  Peti surat
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-cogs"></i>
                Tetapan akaun
                </a>
              </li>
            </ul>


          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Senarai Laporan</h1>
          </div>
          <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

          <canvas class="my-4 chartjs-render-monitor" id="myChart" width="1522" height="642" style="display: block; height: 514px; width: 1218px;"></canvas> 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    

</body>
</html>