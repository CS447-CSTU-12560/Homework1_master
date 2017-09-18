<?php
    session_start();

    require "query/product.php";

    $productModel = new Product();

    $products = $productModel->readProduct();

    $products = $products->fetchAll();

    if(isset($_POST["edit"])) {
        $productName = $_POST["nameOfProduct"];

        header( "Location: edit.php?name=". $productName );
        exit(0);
    }

    if(isset($_POST["delete"])) {
        $productName = $_POST["nameOfProduct"];

        $result = $productModel->deleteProduct($productName);

        if($result->rowCount()) {
            header( "Location: collections.php" );
            exit(0);
        }
    }
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
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	  .margin-bottom {
	  	margin-bottom: 8px;
	  }
 
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">JustSaySweet</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION["username"])) { ?>
            <li><a href="add.php">Add</a></li>
        <?php } ?>
        <li class="active"><a href="#">Collections</a></li>
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
   <div class="row">
   <?php foreach($products as $product) { ?>
    <div class="col-sm-4" style="margin-bottom: 16px"> 
    	<img src="<?php echo $product['imageurl'] ?>" width="350" height="350" class="margin-bottom">
    	<p> Name : <?php echo $product["name"] ?> </p>
    	<p> Price : <?php echo number_format($product["price"]) ?> Bath. </p>
    	<p> Detail : <?php echo $product["detail"] ?></p>
    	<p> Amount : <?php echo $product["amount"] ?></p>
        <?php if(isset($_SESSION["username"])) { ?>
            <form action="" method="POST">
                <input type="hidden" name="nameOfProduct" value="<?php echo $product['name'] ?>">
                <button type="submit" name="edit" class="btn btn-default btn-sm">Edit</button>
                <button type="submit" name="delete" class="btn btn-primary btn-sm">Delete</button>
            </form>
        <?php } ?>
    </div>
    <?php } ?>
</div>
</div>
</div>


</div>
</body>
</html>