<!doctype html>
<html lang="ms"><!-- Bahasa Melayu-->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<title>Laman Utama</title>
</head>
<body>
	<div class="container bg-dark">	
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
				</div>
				<div class="col-4 pt-1 text-center">
					<img src="images/websitelogo.png" width="200" height="92" alt="Logo Hilang">
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">	
					<a class="btn btn-sm btn-outline-secondary mr-1" href="signInpage.php">Log Masuk</a>
					<a class="btn btn-sm btn-outline-primary mr-1" href="signUppage.php">Daftar</a>
				</div>				
				
			</div>
	</div>

			<nav class="navbar container navbar-expand-lg navbar-light sticky-top" style="background-color: #ff4d4d;">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php"> LAMAN UTAMA<span class="sr-only">(current)</span></a></li>
						<li class="nav-item"><a class="nav-link" href="report.php">LAPORAN</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">TENTANG KAMI</a></li>
					</ul>
					<nav class="nav-item dropdown">
    					<a class="nav-link btn btn-outline-light dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">//NAMA SAYA//</a>
    					<div class="dropdown-menu">
      					<a class="dropdown-item" href="#">Profil Saya</a>
      					<div class="dropdown-divider"></div>
      						<a class="dropdown-item" href="#">Log Keluar</a>
   						</div>
					</nav>				
				</div>
				
			</nav>

		<div class="container bg-light"> 
			<br>
		<div class="container-fluid ">

		<!-- post feed -->
				<div class="card" style="width:400px">
   					<img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    				<div class="card-body">
      					<h4 class="card-title">John Doe</h4>
      					<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      					<a href="#" class="btn btn-primary">See Profile</a>
    				</div>
  				</div>

<!--             
				#Connect to the server and database
				$conn = mysql_connect("localhost","root","") or die ("Couldn't connect to the server.");
				$db = mysql_select_db("hilang",$conn) or die ("Couldn't connect to database.");
				$sql = "SELECT * FROM mangsa WHERE approval='Lulus'";
				$result = mysql_query($sql) or die ("Could not execute query");
				$myrow = mysql_fetch_row($result);
				
				#show queries
				do{
				echo"
						<article class='article'>
							<table class='caseTable'>
								<tr>
									<td>
										<form name='form1' method='get' action='view.php' target='_blank'>		
											<input name='View' type='hidden' id='View' value='$myrow[0]'>
											<input type='submit' name='submit' value='Maklumat Penuh'>
										</form>
									</td>
								</tr>
								<tr>
									<td class='th'>Kes : </td>
									<td class='data'>$myrow[1]</td>
								</tr>
								<tr>
									<td class='th'>Nama Penuh Mangsa : </td>
									<td class='data'><i>$myrow[6]</i></td>
								</tr>
								<tr>
									<td class='th'>Umur : </td>
									<td class='data'>$myrow[2]</td>
								</tr>
								<tr>
									<td class='th'>Kali Terakhir Dijumpai Di Alamat : </td>
									<td class='data'>$myrow[3]</td>
								</tr>
								<tr>
									<td class='th'>Tarikh Mangsa Hilang : </td>
									<td class='data'>$myrow[4]</td>
								</tr>";
									echo'<img style="width:150px;height:150px;position:absolute;right:300px" src="data:image/jpeg;base64,'.base64_encode( $myrow[5]).'"/>'; //image
									echo "</table>
						</article><br>
					";
				}
				while($myrow = mysql_fetch_row($result) );
				
             -->
            
			<!-- Display video -->
			<!-- <div class=" embed-responsive embed-responsive-4by3">
				<video align="middle"  controls>
            	<source src="videos/Statistik Ibu Pejabat Polis Bukit Aman kes orang hilang.mp4" type="video/mp4">
            	</video>
			</div> -->
			<br/>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
				Berita
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/ENL6XKtygVU" frameborder="0" encrypted-media" allowfullscreen"></iframe>
					</div>
				</div>
			</div>
			<br>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>