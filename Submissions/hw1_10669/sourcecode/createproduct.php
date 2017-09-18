<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start ();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="icon" type="image/x-icon" href="assets/images/favicons/favicon.ico" />
        <link rel="icon" type="image/png" href="assets/images/favicons/favicon.png" />
        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114-precomposed.png">
        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72-precomposed.png">
        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/favicons/apple-touch-icon-60x60-precomposed.png">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/theme.min.css">
        <link rel="stylesheet" href="assets/css/color-defaults.min.css">
        <link rel="stylesheet" href="assets/css/swatch-beige-black.min.css">
        <link rel="stylesheet" href="assets/css/swatch-black-beige.min.css">
        <link rel="stylesheet" href="assets/css/swatch-black-white.min.css">
        <link rel="stylesheet" href="assets/css/swatch-black-yellow.min.css">
        <link rel="stylesheet" href="assets/css/swatch-blue-white.min.css">
        <link rel="stylesheet" href="assets/css/swatch-green-white.min.css">
        <link rel="stylesheet" href="assets/css/swatch-red-white.min.css">
        <link rel="stylesheet" href="assets/css/swatch-white-black.min.css">
        <link rel="stylesheet" href="assets/css/swatch-white-blue.min.css">
        <link rel="stylesheet" href="assets/css/swatch-white-green.min.css">
        <link rel="stylesheet" href="assets/css/swatch-white-red.min.css">
        <link rel="stylesheet" href="assets/css/swatch-yellow-black.min.css">
        <link rel="stylesheet" href="assets/css/fonts.min.css" media="screen">
    </head>
    <body>
        <header id="masthead" class="navbar navbar-sticky swatch-black-white" role="banner">
        
            <div class="container">
            	
                <div class="navbar-header">
                
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">
                        <img src="assets/images/design/custom-icons/stock.png" alt="">&nbsp;&nbsp;&nbsp;Stock Management System
                    </a>
                </div>
                <nav class="collapse navbar-collapse main-navbar" role="navigation">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown active"><a href="index.php" class="dropdown-toggle"
						data-toggle="dropdown">HOME</a></li>
				
				</ul>

			</nav>
            </div>
        </header>
         <div id="content" role="main">
		<section class="section swatch-beige-black">
			<div class="container">
				<header class="header text-left">
					<?php 
						if ($_SESSION['Fail']){
							echo "<script>";
							echo "alert('ProductName Already in the system')";
							echo "</script>";
						}
					?>
					Create New Product <br><br>
					<form action = "createproduct_sql.php" method = "post">
						Product name : <br>
						<input  type ="text" name = "name" value="" autocomplete="off" required><br>
						Detail : <br>
						<input  type ="text" name = "info" value="" autocomplete="off" required><br>
 						Price :<br>
 						<input  type ="number" name = "price" value="" min="0" autocomplete="off" required><br>
 						Amount:<br>
 						<input type = "number" name ="amount" value="" min="1" required><br>
						Image's URL : <br>
						<input  type ="text" name = "url" value="" autocomplete="off" required>
						<br><br>
						<input type = "submit" value ="Enter"><br><br>
						<br>
						
					</form>
					
				
				</header>
				
			</div>
		</section>
		<footer id="footer" role="contentinfo">
			<section class="section swatch-black-white has-top">
				<div class="decor-top">
					<svg class="decor" height="100%" preserveaspectratio="none"
						version="1.1" viewbox="0 0 100 100" width="100%"
						xmlns="http://www.w3.org/2000/svg">
		<path d="M0 0 L50 100 L100 0 L100 100 L0 100" stroke-width="0"></path>
		</svg>
				</div>

			</section>
		</footer>
	</div>
	</body>
</html>