<?php
	session_start();
?>
<?php 
if (isset($_POST['submit']))
{
	require "config.php";
	require "common.php";

	try 
	{
		$connection = new PDO($dsn, $username, $password, $options);
	
		 $imgFile = $_FILES['Picture']['name'];
 		 $tmp_dir = $_FILES['Picture']['tmp_name'];
  		 $imgSize = $_FILES['Picture']['size'];
		 $upload_dir = 'img/';
		 $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  		 $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  		 $userpic = rand(1000,1000000).".".$imgExt;// rename uploading image

		 if(in_array($imgExt, $valid_extensions)){   
   		 // Check file size '5MB'
    		if($imgSize < 5000000)    {
     			move_uploaded_file($tmp_dir,$upload_dir.$userpic);
		 	}
		 }

		$new_product = array("Name"  => $_POST['Name'],
				"Description"  => $_POST['Description'],
				"Picture" => $userpic,
				"Price"  => $_POST['Price'],
				"Amount"  => $_POST['Amount'],
				"Owner"   => $_SESSION["usname"]);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"product",
				implode(", ", array_keys($new_product)),
				":" . implode(", :", array_keys($new_product)));

		$statement = $connection->prepare($sql);
		$statement->execute($new_product);

	}

	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
	
}
?>
<?php require "templates/header.php"; ?>

<?php 
if (isset($_POST['submit']) && $statement) 
{ ?>
	<blockquote><?php echo $_POST['Name']; ?> successfully added.</blockquote>
<?php 
} ?>

<h2>Add a product</h2>


<form method="post" enctype="multipart/form-data">
	<label for="Name">Name</label>
	<input type="text" name="Name" id="Name">
	<label for="Description">Description</label>
	<input type="text" name="Description" id="Description">
	<label class="control-label">Picture</label>
	<input class="input-group" type="file" name="Picture" id="Picture" accept="image/*">
	<label for="Price">Price</label>
	<input type="text" name="Price" id="Price">
	<label for="Amount">Amount</label>
	<input type="text" name="Amount" id="Amount">
	<input type="submit" name="submit" value="Submit">
</form>

<a href="index.1.php">Back to home</a>

<?php include "templates/footer.php"; ?>