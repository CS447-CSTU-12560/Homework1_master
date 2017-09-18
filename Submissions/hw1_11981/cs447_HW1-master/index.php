<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>JustSaySweet</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
		  width: 100%;
		}
		.my-btn {
			color:black !important;
		}
		.carousel-inner {
			margin-bottom: 50px;
		}

	</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JustSaySweet</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="collections.php">Collections</a></li>
        <li>
          <?php if(isset($_SESSION["username"])) { ?>
            <a href="#"><?php echo $_SESSION['username'] ?></a>
          <?php } else { ?>
            <a href="signin.php">Sign in</a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="pic/1.jpg" alt="Chania" width="838" height="552">
        <div class="carousel-caption">
          <h3>Something Sweet</h3>
          <p><a href="collections.php" class="btn btn-link my-btn"><< New Collection >></a></p>
        </div>
      </div>

      <div class="item">
        <img src="pic/2.jpg" alt="Chania" width="838" height="552">
        <div class="carousel-caption">
          <h3>Something Sweet</h3>
          <p><a href="collections.php" class="btn btn-link my-btn"> << New Collection >> </a></p>
        </div>
      </div>
    
      <div class="item">
        <img src="pic/3.jpg" alt="Flower" width="838" height="552">
        <div class="carousel-caption">
          <h3>Something Sweet</h3>
          <p><a href="collections.php" class="btn btn-link my-btn"><< New Collection >></a></p>
        </div>
      </div>

      <div class="item">
        <img src="pic/4.jpg" alt="Flower" width="838" height="552">
        <div class="carousel-caption">
          <h3>Something Sweet</h3>
          <p><a href="collections.php" class="btn btn-link my-btn"> << New Collection >></a></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>
</body>
</html>