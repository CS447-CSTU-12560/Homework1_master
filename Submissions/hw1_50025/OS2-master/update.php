<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start ();
$conn = new mysqli("localhost", "root", "" ,"os2");
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
    <h2>Update Product</h2><br>
  </div>
  <div class="w3-padding-large w3-container w3-left">
  <form action = "update_sql.php" method = "post">
      <h4>Product </h4>
      <select name="pname" required>
      						<?php 
  						 	$objQuerySQL = $conn->query ( "SELECT productname FROM product" );
  						 	while ($row = $objQuerySQL->fetch_assoc()){
  						 		echo '<option value="'.$row['productname'].'">'.$row['productname'].'</option>';
  						 	}
  							?> 
      </select>
      <h4>Price </h4>
      <input type = "number" name ="price" value="" min="0" required>
      <h4>Amount </h4>
      <input type = "number" name ="amount" value="" min="0" required>
      <h4>Description </h4>
      <input type = "text" name ="des" required>
      <h4>Picture URL </h4>
      <input type = "text" name ="pic" required><br><br><br>
      <input type = "submit" value ="Update">
      </form>
   
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
