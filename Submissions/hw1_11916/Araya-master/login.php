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
        <a class="navbar-brand" href="login.php">LOG IN</a>
      </ul>
    </div>
  </div>
</nav>

<div class"container">
<div class="col-sm-4 col-sm-offset-4">
  <div class="form-group">
  <label class="control-label" for="focusedInput">User Name</label>
  <input class="form-control" id="focusedInput" type="text" value="">
  <label class="control-label" for="focusedInput">Password</label>
  <input class="form-control" id="focusedInput" type="text" value="">
  <br></br>
  <a href="collection.php"> <button type="submit" class="btn btn-primary btn btn-block">LOG IN</button></a>
</div>   
  </div>
</div>

</div>
</body>
</html>