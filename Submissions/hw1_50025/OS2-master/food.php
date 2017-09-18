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

	<!-- !PAGE CONTENT! -->
	<div class="w3-main w3-content w3-padding"
		style="max-width: 1200px; margin-top: 100px">

		<!-- First Photo Grid-->
		<div class="w3-row-padding w3-padding-16 w3-center" id="food">
		<?php 
		$result = $conn->query ("SELECT * FROM product");
		$count = 0;
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if($count%4==0){
					echo "<div class='w3-row-padding w3-padding-16 w3-center' id='food'>";
				}
				echo "<div class='w3-quarter' >";
				echo "<img src='".$row['picture']."' alt='Cherries' style='width: 100%' height='300'>";
				echo "<h3>".$row['productname']."</h3>";
				echo "<p>Price: ".$row['price']."</p>";
				echo "<p>Amount: ".$row['amount']."</p>";
				echo "<p>Description: ".$row['description']."</p>";
				echo "</div>";
				$count++;
				if($count%4==0){
					echo "</div>";
				}
			}
		}
		?>
		</div>
		
			
			
			
		</div>

		

		<hr id="about">

		<!-- About Section -->
		

		<!-- End page content -->

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
