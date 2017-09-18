<?php
if (isset($_POST['logout'])) 
{
		header("Location:index.php");
}?>

<?php include "templates/header.php"; ?>

<ul>
	<li><a href="addproduct.php"><strong>Create</strong></a> - add a product</li>
	<li><a href="searchallproduct.php"><strong>Read</strong></a> - Search a product</li>
	<li><a href="editproduct.php"><strong>Update</strong></a> - edit a product</li>
	<li><a href="deleteproduct.php"><strong>Delete</strong></a> - delete a product</li>
</ul>
<form method="post">
	<input type="submit" name="logout" value="logout">
</form>

<?php include "templates/footer.php"; ?>