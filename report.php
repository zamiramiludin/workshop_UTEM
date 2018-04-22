
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
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php"> LAMAN UTAMA<span class="sr-only">(current)</span></a></li>
                            <li class="nav-item active"><a class="nav-link" href="report.html">LAPORAN</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">TENTANG KAMI</a></li>
                        </ul>
                    </div>
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
                <input type="text" class="form-control" id="caseType" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="victimName">Nama mangsa</label>
                <input type="text" class="form-control" id="victimName" placeholder="" required>
            </div>           
            <div class="form-group">
                    <label for="victimAge">Umur (tahun)</label>
                    <input type="number" class="form-control" name="victimAge" min="1" max="120" placeholder="" required>
            </div>
            <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-2">Jantina</legend>
                <div class="col-sm-10">
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
            <div class="form-group">
                    <label for="address">Lokasi terakhir hilang</label>
                    <input type="text" class="form-control" id="address" placeholder="Butiran alamat mangsa hilang" required>
            </div>           
            <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="city">Daerah</label>
                      <input type="text" class="form-control" id="city">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="state">Negeri</label>
                      <select id="state" class="form-control">
                        <option selected>Pilih...</option>
                        <option>Perak</option>
                        <option>Pulau Pinang</option>
                        <option>Pahang</option>
                        <option>Melaka</option>
                        <option>Negeri Sembilan</option>
                        <option>Terengganu</option>
                      </select>
                    </div>
            </div>
            <div class="form-group">
                <label for="date">Tarikh kejadian berlaku</label>
                <input type="date" id="date" placeholder="mm/dd/yyyy" name="date" required>
            </div>
            <div class="form-group">
                    <label for="attire">Butiran pakaian mangsa ketika hilang</label>
                    <input type="text" class="form-control" id="attire" placeholder="">
            </div>                  
            <div class="form-group">
                    <label for="characteristic">Ciri-ciri rupa mangsa</label>
                    <input type="text" class="form-control" id="characteristic" placeholder="">
            </div>      
            <div class="form-group row">
                <label class="col-md-3" for="victimPicture">Pilih fail gambar mangsa</label>
                <div class="input-group col-md-6">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Muat naik</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" accept="image/jpeg" id="victimPicture" required>
                          <label class="custom-file-label" for="victimPicture">Pilih gambar</label>
                        </div>
                      </div>                
            </div>
            <div class="form-group">
                    <label for="info">Maklumat tambahan</label>
                    <input type="text" class="form-control" id="info" placeholder="">
            </div>                
            <div class="form-group">
                <button type="submit" id="submit-button" class="btn btn-success">Hantar</button>
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
                text: "Sila log masuk ke akaun anda atau daftar akaun baru untuk membuat sebarang laporan.",
                icon: "warning",
                closeOnClickOutside: false,
            });
        
    </script>
</body>
</html>
