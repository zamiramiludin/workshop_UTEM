<!DOCTYPE HTML>
<html lang="ms"><!-- Bahasa Melayu-->
<head>
        <title>Log Masuk</title>
        <link rel="stylesheet" href="css/styles.css" />
        <style>
            #box-signin { margin: 10px 300px; }
        </style>
</head>
<body>
    <!-- <div class="content">
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
            <fieldset style="background-color:#FFFFFF;width:350px"><br>
                <label><b>Nama Pengguna	:</b></label> <input type="text" name="username" required><br/><br/>
                <label><b>Kata Laluan		:</b></label> <input type="password" name="userpassword" required><br><br>
                <input type="submit" value="Log Masuk">
                <input type="reset">
            </fieldset>
            </form><br><br><br><br><br><br><br><br>

        </div>
        <div class="footer">Hakmilik Penuh &copy 2016 Muhammad Nur Zamir Bin Amiludin (DCS141013) - Final Year Project. Hak cipta terpelihara. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="signIn.php">Admin</a></div>
    </div> -->

    <form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
      </div>

      <div class="form-label-group">
        <input id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" type="email">
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input value="remember-me" type="checkbox"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
    </form>
  
</body>
</html>