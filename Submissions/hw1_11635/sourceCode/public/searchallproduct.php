
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
        	
		$sql = "SELECT * FROM product WHERE Name = :Name";
		$address = $_POST['Name'];

		$statement = $connection->prepare($sql);
		$statement->bindParam(':Name', $address, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetchAll();
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
}?>
<?php
if (isset($_POST['submit1'])) 
{
	
	try 
	{
		require "config.php";
		require "common.php";

		$connection = new PDO($dsn, $username, $password, $options);
        	
		$sql = "SELECT * FROM product";

		$statement = $connection->prepare($sql);
		$statement->execute();

		$result = $statement->fetchAll();
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
}

?>

<?php include "templates/header.php"; ?>

<?php  
if (isset($_POST['submit'])) 
{
	if ($result && $statement->rowCount() > 0) 
	{ ?>
		<h2>Results</h2>

		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Picture</th>
					<th>Price</th>
					<th>Amount</th>
					<th>Own</th>
					<th>date</th>
				</tr>
			</thead>
			<tbody>
	<?php 
		foreach ($result as $row) 
		{ ?>
			<tr>
				<td><?php echo escape($row["id"]); ?></td>
				<td><?php echo escape($row["Name"]); ?></td>
				<td><?php echo escape($row["Description"]); ?></td>
				<td><img src="img/<?php echo $row['Picture']; ?>" class="img-rounded" width="250px" height="250px" /> </td>
				
				<td><?php echo escape($row["Price"]); ?></td>
				<td><?php echo escape($row["Amount"]); ?></td>
				<td><?php echo escape($row["Owner"]); ?></td>
				<td><?php echo escape($row["date"]); ?> </td>
			</tr>
		<?php 
		} ?>
		</tbody>
	</table>
<?php 
	} 
	else 
	{ ?>
		<blockquote>No results found for <?php echo escape($_POST['Name']); ?>.</blockquote>
	<?php
	} 
}?> 
<?php  
if (isset($_POST['submit1'])) 
{
	if ($result && $statement->rowCount() > 0) 
	{ ?>
		<h2>Results</h2>

		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Picture</th>
					<th>Price</th>
					<th>Amount</th>
					<th>Own</th>
					<th>date</th>
				</tr>
			</thead>
			<tbody>
	<?php 
		foreach ($result as $row) 
		{ ?>
			<tr>
				<td><?php echo escape($row["id"]); ?></td>
				<td><?php echo escape($row["Name"]); ?></td>
				<td><?php echo escape($row["Description"]); ?></td>
				<td><img src="img/<?php echo $row['Picture']; ?>" class="img-rounded" width="250px" height="250px" /> </td>
				<td><?php echo escape($row["Price"]); ?></td>
				<td><?php echo escape($row["Amount"]); ?></td>
				<td><?php echo escape($row["Owner"]); ?></td>
				<td><?php echo escape($row["date"]); ?> </td>
			</tr>
		<?php 
		} ?>
		</tbody>
	</table>
<?php 
	} 
	else 
	{ ?>
		<blockquote>No results found for <?php echo escape($_POST['Name']); ?>.</blockquote>
	<?php
	} 
}?> 
<h2>Find product based on Name</h2>

<form method="post">
	<label for="Name">Name</label>
	<input type="text" id="Name" name="Name">
	<input type="submit" name="submit" value="View Results">
	<input type="submit" name="submit1" value="View All">
</form>

<a href="index.1.php">Back to home</a>

<?php include "templates/footer.php"; ?>