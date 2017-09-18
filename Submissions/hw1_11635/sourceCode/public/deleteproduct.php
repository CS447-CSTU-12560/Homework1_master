<?php
	session_start();
?>

<?php
if (isset($_POST['submit'])) 
{

	try 
	{
		require "config.php";
		require "common.php";

		$connection = new PDO($dsn, $username, $password, $options);
        	
		$sql = "DELETE FROM product WHERE Name = \"".$_POST['name']."\" and Owner =\"".$_SESSION["usname"]."\"";
		$statement = $connection->prepare($sql);
     	$statement->execute();
		 
		$connection = null;
	}catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
	
}?>
<?php 
if (isset($_POST['submit']) && $statement) 
{ ?>
	<blockquote><?php echo $_POST['name']; ?> successfully Delete.</blockquote>
<?php 
} ?>
<?php include "templates/header.php"; ?>


<h2>Delete product based on Name</h2>

<form method="post">
	<label for="Name">Name</label>
	<input type="text" id="name" name="name">
	<input type="submit" name="submit" value="Delete Product">
</form>

<a href="index.1.php">Back to home</a>

<?php include "templates/footer.php"; ?>