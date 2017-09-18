<?php

  session_start();

  if(isset($_SESSION["username"])) {
    header("location: index.php");
    exit(0);
  }

  require "query/user.php";

  $userModel = new User();

  if(isset($_POST['signIn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $signInResult = $userModel->signIn($username, $password);

    if($signInResult->rowCount()) {
      $user = $signInResult->fetch();
      $_SESSION['username'] = $user["username"];
      header("location: index.php");
      exit(0);
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">JustSaySweet</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="collections.php">Collections</a></li>
        <li class="active"><a href="#">Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
   <div class="row">

    <form method="POST" action="">
      <div class="col-sm-4 col-sm-offset-4">
        <h1>Sign in</h1>
          <div class="form-group">
            <label class="control-label" for="focusedInput">Username</label>
            <input class="form-control" name="username" id="focusedInput" type="text" value="">
          </div>
          <div class="form-group">
            <label class="control-label" for="focusedInput">Password</label>
            <input class="form-control" name="password" id="focusedInput" type="password" value="">
          </div>
          <button name="signIn" class="btn btn-primary btn-sm btn-block">Sign in</button>
      </div>
    </form>



</body>
</html>