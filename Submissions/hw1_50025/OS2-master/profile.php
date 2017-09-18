<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start ();
$conn = new mysqli("localhost", "root", "" ,"projectdb");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Karma">
<style>
body, h1, h2, h3, h4, h5, h6 {
	font-family: "Karma", sans-serif
}

.w3-bar-block .w3-bar-item {
	padding: 20px
}
</style>
<body>

	<!-- Sidebar (hidden by default) -->
	<nav
		class="w3-sidebar w3-bar-block w3-card-2 w3-top w3-xlarge w3-animate-left w3-dark-gray"
		style="display: none; z-index: 2; width: 40%; min-width: 300px"
		id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()"
			class="w3-bar-item w3-button">Close(X)</a> 
			<a href="profile.php"  class="w3-bar-item w3-button">Profile</a>
			<a href="food.php"  class="w3-bar-item w3-button">Product</a> 
			<a href="update.php"  class="w3-bar-item w3-button">Update</a>
			<a href="create.php"  class="w3-bar-item w3-button">Create</a>
			<a href="delete.php"  class="w3-bar-item w3-button">Delete</a>
			<a href="logout.php"  class="w3-bar-item w3-button">Log out</a>
	</nav>

	<!-- Top menu -->
	<div class="w3-top">
		<div class="w3-black w3-xlarge"
			style="max-width: auto; margin: auto">
			<div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">≡</div>
			<div class="w3-center w3-padding-16">My Food</div>
		</div>
	</div>


  
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>My Profile</h3><br>
    <img src="https://i.pinimg.com/736x/bb/ff/d2/bbffd21f072c9ee49b45a1d70c7be73e--funny-teacher-quotes-teacher-funnies.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="200" height="200">
    <div class="w3-padding-32">
    <?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "os2";
					$conn = new mysqli ( $servername, $username, $password, $dbname );
					if ($conn->connect_error) {
						die ( "Connetion failed: " . $conn->connect_error );
					}
					$sql = "SELECT * FROM account WHERE username = '" . $_SESSION ['user'] . "'";
					$result = $conn->query ( $sql );
					$row = $result->fetch_assoc ();
					
					
					echo "<h4> ".$row['name']." ".$row['surname']."</h4>";
					echo "<h4> ".$row['phone']."</h4>";
					echo "<h4> ".$row['address']."</h4>";
       				
       ?>
       <h4></h4>
    </div>
  </div>
  
 
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
