
<!DOCTYPE html>
<html lang="ms">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <title>Buat Laporan</title>
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
    
                <nav class="navbar container navbar-expand-lg navbar-light sticky-top justify-content-center" style="background-color: #ff4d4d;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php"> LAMAN UTAMA<span class="sr-only">(current)</span></a></li>
                            <li class="nav-item active"><a class="nav-link" href="report.html">LAPORAN</a></li>
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
                
        <?php //if (isset($_SESSION['status'] == logged )) { ?> 
            <!-- else masuk modal -->
		
        <div class="container bg-light"> 
						<br>
		<div class="container-fluid">
        <h1>Laporan Kes</h1>
        <form name="reportform" method="post" action="reportProcess.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="caseType">Jenis kes</label>
                <input type="text" class="form-control" id="caseType" name="caseType" placeholder="Contoh: Hilang" required>
            </div>
            <div class="form-group">
                <label for="victimName">Nama mangsa</label>
                <input type="text" class="form-control" id="victimName" name="victimName" placeholder="Isi nama penuh mangsa " required>
            </div>     
            <div class="form-row">      
                <div class="form-group col-md-6">
                        <label for="victimAge">Umur (tahun)</label>
                        <input type="number" class="form-control" name="victimAge" name="victimAge" min="1" max="120" required>
                </div>
                <div class="form-group col-md-2">
                </div>
                <fieldset class="form-group col-md-4">
                    <label>Jantina</label>
                    <div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Lelaki">
                            Lelaki
                            </label>
                        </div>		
                        <div class="form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan">
                            Perempuan
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>		            
            <div class="form-group">
                    <label for="address">Lokasi terakhir hilang</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Butiran alamat mangsa hilang" required>
            </div>           
            <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="city">Daerah</label>
                      <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="state">Negeri</label>
                      <select class="custom-select" id="state" name="state" >
                        <option selected>Sila pilih ...</option>
                        <option value"Johor">Johor</option>
                        <option value"Kedah">Kedah</option>
                        <option value"Kelantan">Kelantan</option>
                        <option value"Kuala Lumpur">Kuala Lumpur</option>
                        <option value"Labuan">Labuan</option>
                        <option value"Melaka">Melaka</option>
                        <option value"Negeri Sembilan">Negeri Sembilan</option>
                        <option value"Pahang">Pahang</option>
                        <option value"Perak">Perak</option>
                        <option value"Perlis">Perlis</option>
                        <option value"Pulau Pinang">Pulau Pinang</option>
                        <option value"Putrajaya">Putrajaya</option>
                        <option value"Sabah">Sabah</option>
                        <option value"Sarawak">Sarawak</option>
                        <option value"Selangor">Selangor</option>
                        <option value"Terengganu">Terengganu</option>
                      </select>
                    </div>
            </div>
            <div class="form-group">
                <label for="date">Tarikh kejadian berlaku</label>
                <input type="date" id="date" name="date" placeholder="mm/dd/yyyy" name="date" required>
            </div>
            <div class="form-group">
                    <label for="attire">Butiran pakaian mangsa ketika hilang</label>
                    <input type="text" class="form-control" id="attire" name="attire" placeholder="">
            </div>                  
            <div class="form-group">
                    <label for="characteristic">Ciri-ciri rupa mangsa</label>
                    <input type="text" class="form-control" id="characteristic" name="characteristic" placeholder="">
            </div>      
            <div class="form-group row">
                <label class="col-md-3" for="victimPicture">Pilih fail gambar mangsa</label>
                <input type="file" name="victimPicture" id="victimPicture">
            </div>
            <div class="form-group">
                <label for="relation">Pertalian dengan mangsa</label>
                <input type="text" class="form-control" id="relation" name="relation" placeholder="Contoh: Ayah" required>
            </div>            
            <div class="form-group">
                    <label for="info">Deskripsi</label>
                    <input type="text" class="form-control" id="info" name="info" placeholder="" required>
            </div>                
            <div class="form-group">
                <button type="submit" id="submit" name="submit" class="btn btn-success">Hantar</button>
                <button type="reset" class="btn btn-danger">Tetapkan semula</button>
            </div>
        </form>
        </div>
        </div>
    </div>    

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  <script>
        
            swal({
                title: "Perhatian!",
                text: "Untuk membuat sebarang laporan sila log masuk ke akaun anda atau daftar akaun baru bagi mengelakkan ralat sistem.",
                icon: "warning",
                closeOnClickOutside: false,
            });
        
    </script>
</body>
</html>
