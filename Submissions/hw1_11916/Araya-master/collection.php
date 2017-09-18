<?php
  session_start();

  require "query/details.php";

  $product = new product();

  $products = $product->allProduct();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ARAYA COSMETIC</a>
       <a class="navbar-brand" href="home.php">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Wellcome</a></li>
        <a class="navbar-brand" href="home.php">LOG OUT</a>
      </ul>
    </div>
  </div>
</nav>


<div class"container">

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Product</th>
      <th>Description</th>
      <th>Price</th>
      <th>Picture</th>
      <th>Amount</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($products->fetchAll() as $name) { ?>
    <tr>
      <td> <?php echo $name["Name"] ?></td>
      <td><?php echo $name["Description"] ?></td>
       <td><?php echo $name["Price"] ?></td>
       <td><img src="<?php echo $name["Picture"] ?>"></td>
      <td><?php echo $name["Amount"] ?></td>
      <td><a href="editProduct.php?name=<?php echo $name['Name'] ?>">edit</a></td>
      <td><a href="deleteProduct.php?name=<?php echo $name['Name'] ?>">delete</a></td>
    </tr>
  <?php } ?> 
  </tbody>
</table>
<div class="col-sm-4 col-sm-offset-4">
<a href="addProduct.php"> <button type="submit" class="btn btn-primary btn btn-block">ADD PRODUCT</button></a>
</div>
</div>


</body>
</html>