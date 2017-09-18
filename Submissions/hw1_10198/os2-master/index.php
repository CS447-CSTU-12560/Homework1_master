<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "home_login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sun Store</title>
<meta charset="utf-8">
<noscript>
<link rel="stylesheet" href="css/5grid/core.css">
<link rel="stylesheet" href="css/5grid/core-desktop.css">
<link rel="stylesheet" href="css/5grid/core-1200px.css">
<link rel="stylesheet" href="css/5grid/core-noscript.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-desktop.css">
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
</head>
<body>
<div id="header-wrapper">
  <header id="header" class="5grid-layout">
    <div class="row">
      <div class="12u">
        <!-- Logo -->
        <h1><a href="#" class="mobileUI-site-name">Ruler</a></h1>
        <p></p>
        <!-- Nav -->
        <nav class="mobileUI-site-nav"> <a href="index.php" class="active">Homepage</a> <a href="stock.php">Stock</a>   <a href="update.php">update</a> </nav>
      </div>
    </div>
  </header>
</div>
<div id="wrapper">
  <div class="5grid-layout">
    <div class="row">
      <div class="12u" id="banner">
        <section><a href="#"><img src="images/pics01.jpg" alt="" width="652" height="180"></a></section>
      </div>
    </div>
    <div id="feature-content">
      <section>
        <h2>electronic shop</h2>
      </section>
      <div class="row">
        <div class="12u">
          <div class="row">
            <div class="3u">
              <section>
                <div>
                  <div class="image-style1"><a href="#"><img src="images/pics06.jpg" alt=""></a></div>
                  <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                </div>
                <p class="button"><a href="#">Read Full Details</a></p>
              </section>
            </div>
            <div class="3u">
              <section>
                <div>
                  <div class="image-style1"><a href="#"><img src="images/pics07.jpg" alt=""></a></div>
                  <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                </div>
                <p class="button"><a href="#">Read Full Details</a></p>
              </section>
            </div>
            <div class="3u">
              <section>
                <div>
                  <div class="image-style1"><a href="#"><img src="images/pics08.jpg" alt=""></a></div>
                  <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                </div>
                <p class="button"><a href="#">Read Full Details</a></p>
              </section>
            </div>
            <div class="3u">
              <section>
                <div>
                  <div class="image-style1"><a href="#"><img src="images/pics09.jpg" alt=""></a></div>
                  <div></div>
                </div>
                <p class="button">&nbsp;</p>
                <p class="button"><a href="#">Read Full Details</a></p>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="page">
      <div class="row">
        <div class="12u"> </div>
      </div>
    </div>
    <div class="row">
      <div class="12u">
        <div class="row"> </div>
      </div>
    </div>
</div>
</div>
<div class="5grid-layout">
  <div id="copyright">
    <section>
      <p>&copy; Your Site Name | Images: <a target="_blank" href="http://fotogrph.com/">Fotogrph</a> | User : <a target="_blank" href="<?php echo $logoutAction ?>">Log out</a></p>
    </section>
  </div>
</div>
</body>
</html>
