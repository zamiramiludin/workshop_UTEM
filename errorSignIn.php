<!DOCTYPE HTML>
<html lang="ms"><!-- Bahasa Melayu-->
<head>
        <title>Log Masuk</title>
        <link rel="stylesheet" href="css/styles.css" />
        <style>
            #box-signin {
                margin: 10px 300px;
            }
        </style>
</head>
<body>
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

            <form id="box-signin" name="adminForm" method="POST" action="signInProcess.php">
            <fieldset style="background-color:#FFFFFF;width:350px">
                <p style="color:red; size: 3pt">Nama pengguna atau kata laluan salah</p>

                <label>Nama Pengguna	:</label> <input type="text" name="username" required><br/><br/>
                <label>Kata Laluan		:</label> <input type="password" name="userpassword" required><br><br>
                <input type="submit" value="Log In">
                <input type="reset">
            </fieldset>
            </form>

        </div><br>
        <div class="footer">Hakmilik Penuh &copy 2016 Muhammad Nur Zamir Bin Amiludin (DCS141013) - Final Year Project. Hak cipta terpelihara. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="signIn.php">Admin</a></div>
    </div>
</body>
</html>