<?php 
if (isset($_POST['submit']))
{
	
	require "config.php";
	require "common.php";

	try 
	{
		$connection = new PDO($dsn, $username, $password, $options);
		$new_user = array("username"  => $_POST['username'],
				"password"  => $_POST['password'],
				"firstname" => $_POST['firstname'],
				"lastname"  => $_POST['lastname'],
				"address"   => $_POST['address']);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"users",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user)));

		$statement = $connection->prepare($sql);
		$statement->execute($new_user);

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
	<blockquote><?php echo $_POST['firstname']; ?> successfully added.</blockquote>
<?php 
} ?>

<h2>Add a user</h2>


<form method="post">
	<label for="username">username</label>
	<input type="text" name="username" id="username">
	<label for="password">password</label>
	<input type="text" name="password" id="password">
	<label for="firstname">First Name</label>
	<input type="text" name="firstname" id="firstname">
	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" id="lastname">
	<label for="address">address</label>
	<input type="text" name="address" id="address">
	<input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>